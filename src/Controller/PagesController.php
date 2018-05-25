<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Mailer\Email;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

class PagesController extends AppController
{
    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
    }
    
    public function home(){
        
    }
    
    public function signin(){
        $this->viewBuilder()->setLayout('ajax');
        if ($this->request->is(['patch', 'post', 'put'])) {   
            
            $this->loadModel("Inscricoes");
            $inscricoes_data = $this->request->getData();
            $inscricoes_data['status']='aguardando pagamento';
            $inscricoes_data['quantity']=1;
            
            $total = $this->Inscricoes->find('all')->count();
            if($total <= 80){
                $inscricoes_data['item_id'] = 1;
                $inscricoes_data['value'] = 90.00;
            }
            elseif($total > 80 && $total <= 190){
                $inscricoes_data['item_id'] = 2;
                $inscricoes_data['value'] = 100.00;
            }
            elseif($total > 190 && $total <= 260){
                $inscricoes_data['item_id'] = 3;
                $inscricoes_data['value'] = 120.00;
            }
            else{

            }

            $inscricao = $this->Inscricoes->newEntity();
            $inscricao = $this->Inscricoes->patchEntity($inscricao, $inscricoes_data);
            $inscricao['created_at'] = date("Y-m-d H:i:s");
            if ($this->Inscricoes->save($inscricao)) {
                $this->setPayment($inscricao);
                echo true;
            } else {
                echo false;
            }
        }
        $this->render(false);
    }

    public function setPayment($data){
        //die(debug($data->value));
        $apiContext = new \PayPal\Rest\ApiContext(new \PayPal\Auth\OAuthTokenCredential
        (
            'ASv_l-U4gyGBHQ0OUKUusJKBM4wGxKpOO9y_932XmIWMGG1U0t7T8EdZ1pbcoFpiqqDrz0TdN-u3A_Uj',  // you will get information about client id and secret once you have created test account in paypal sandbox  
            'EEQBQUMyRj6EmVcx2hjI9din9rrLiL3ATAvDvdfTTi9lTl6FsCNCEwijLRt11KyIeyMPN2dlTzCudqIf'  
            )
        );
        // Setting payer
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        // Setting items
        $item1 = new Item();
        $item1->setName('Palestra com Leandro Karnal')
        ->setCurrency('BRL')
        ->setQuantity(1)
        ->setSku("1") // Similar to `item_number` in Classic API
        ->setPrice(floatval($data->value));

        // Item list
        $itemList = new ItemList();
        $itemList->setItems([$item1]);

        // Details
        $details = new Details();
        $details->setShipping(0)
        ->setTax(0)
        ->setSubtotal(floatval($data->value));

        // Amount
        $amount = new Amount();
        $amount->setCurrency("BRL")
        ->setTotal(floatval($data->value))
        ->setDetails($details);

        // Transaction
        $transaction = new Transaction();
        $transaction->setAmount($amount)
        ->setItemList($itemList)
        ->setDescription("Mudar é difícil, mas não mudar é fatal.")
        ->setInvoiceNumber(uniqid());

        // Redirect urls
        $baseUrl = 'http://localhost/aacd-full-v2';
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("$baseUrl/pages/executePayment?success=true")
        ->setCancelUrl("$baseUrl/pages/executePayment?success=false");

         // Payment
        $payment = new Payment();
        $payment->setIntent("sale")
        ->setPayer($payer)
        ->setRedirectUrls($redirectUrls)
        ->setTransactions(array($transaction));

        // For Sample Purposes Only.
        $request = clone $payment;

        try {
            $payment->create($apiContext);
        } catch (Exception $ex) {
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
            ResultPrinter::printError("Created Payment Using PayPal. Please visit the URL to Approve.", "Payment", null, $request, $ex);
            exit(1);
        }
        
        // ### Get redirect url
        // The API response provides the url that you must redirect
        // the buyer to. Retrieve the url from the $payment->getApprovalLink()
        // method
        $approvalUrl = $payment->getApprovalLink();
        
        // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
        echo ("$approvalUrl");
    }

    public function final(){
        
    }

    public function dashboard(){
        $this->loadModel("Inscricoes");
        $inscricoes = $this->paginate($this->Inscricoes,
            ['order'=>['id DESC']]);
        $this->set(compact('inscricoes'));
        $this->set('_serialize', ['inscricoes']);
    }
    
    public function index(){
        $apiContext = new \PayPal\Rest\ApiContext(new \PayPal\Auth\OAuthTokenCredential
        (
            'ATNMdSKRoz57Z42a27NXwe7GybVW3zs8QnB5XnIaG7OKhnVZU_7koz2A_nfeTOwCayEjXgAh7Go9ClcN',  // you will get information about client id and secret once you have created test account in paypal sandbox  
            'EDBn2ZjsZVPUljACFenZoIOKE-563QmAcy9Gnujosld2pefxvyBTk7yjZcX0VpIBsQt5XllGUwg5g7VZ'  
            )
        );
        
        // ### Payer0
        // A resource representing a Payer that funds a payment
        // For paypal account payments, set payment method
        // to 'paypal'.
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");
        
        // ### Itemized information
        // (Optional) Lets you specify item wise
        // information
        $item1 = new Item();
        $item1->setName('Ground Coffee 40 oz')
        ->setCurrency('BRL')
        ->setQuantity(1)
        ->setSku("123123") // Similar to `item_number` in Classic API
        ->setPrice(7.5);
        $item2 = new Item();
        $item2->setName('Granola bars')
        ->setCurrency('BRL')
        ->setQuantity(5)
        ->setSku("321321") // Similar to `item_number` in Classic API
        ->setPrice(2);
        
        $itemList = new ItemList();
        $itemList->setItems(array($item1, $item2));
        
        // ### Additional payment details
        // Use this optional field to set additional
        // payment information such as tax, shipping
        // charges etc.
        $details = new Details();
        $details->setShipping(1.2)
        ->setTax(1.3)
        ->setSubtotal(17.50);
        
        // ### Amount
        // Lets you specify a payment amount.
        // You can also specify additional details
        // such as shipping, tax.
        $amount = new Amount();
        $amount->setCurrency("BRL")
        ->setTotal(20)
        ->setDetails($details);
        
        // ### Transaction
        // A transaction defines the contract of a
        // payment - what is the payment for and who
        // is fulfilling it. 
        $transaction = new Transaction();
        $transaction->setAmount($amount)
        ->setItemList($itemList)
        ->setDescription("Payment description")
        ->setInvoiceNumber(uniqid());
        
        // ### Redirect urls
        // Set the urls that the buyer must be redirected to after 
        // payment approval/ cancellation.
        $baseUrl = 'http://localhost/aacd-full-v2';
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("$baseUrl/pages/executePayment?success=true")
        ->setCancelUrl("$baseUrl/pages/executePayment?success=false");
        
        // ### Payment
        // A Payment Resource; create one using
        // the above types and intent set to 'sale'
        $payment = new Payment();
        $payment->setIntent("sale")
        ->setPayer($payer)
        ->setRedirectUrls($redirectUrls)
        ->setTransactions(array($transaction));
        
        
        // For Sample Purposes Only.
        $request = clone $payment;
        
        // ### Create Payment
        // Create a payment by calling the 'create' method
        // passing it a valid apiContext.
        // (See bootstrap.php for more on `ApiContext`)
        // The return object contains the state and the
        // url to which the buyer must be redirected to
        // for payment approval
        try {
            $payment->create($apiContext);
        } catch (Exception $ex) {
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
            ResultPrinter::printError("Created Payment Using PayPal. Please visit the URL to Approve.", "Payment", null, $request, $ex);
            exit(1);
        }
        
        // ### Get redirect url
        // The API response provides the url that you must redirect
        // the buyer to. Retrieve the url from the $payment->getApprovalLink()
        // method
        $approvalUrl = $payment->getApprovalLink();
        
        // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
        echo ("Created Payment Using PayPal. Please visit the URL to Approve. <br/>Payment<br/><a href='$approvalUrl' >$approvalUrl</a> $request, $payment");
        
        return $payment;
        
        $this->render(false);
    }
}
