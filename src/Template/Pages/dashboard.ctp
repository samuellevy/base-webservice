<section class="dashboard">
    <!-- <div class="loading" ng-show="hasRequest">Carregando&#8230;</div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-warning pull-right">Logout</button>
            </div>
        </div>
    </div>
    <div class="container sample tabsdemoDynamicTabs">
        <div class="row" infinite-scroll="myPagingFunction()" infinite-scroll-distance="3">
            <div class="demo-tab" style="padding: 25px; text-align: center;"><br>
                <div class="content">
                    <div class="row">
                        <div class="col-md-8">
                            <form>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-search"></i></div>
                                        <input type="text" class="form-control" placeholder="Pesquise..." ng-model="searchTransaction">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-2">
                            <!-- <p>Última atualização <br>às {{transactions.last_update}}</p> -->
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-link pull-right" ng-click="exportToExcel('#table2')">Exportar para Excel</button>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped" ng-init="getTransactions()" id="table2">
                                <thead>
                                    <tr>
                                        <th class="text-center">Nome</th>
                                        <th class="text-center">E-mail</th>
                                        <th class="text-center">Celular</th>
                                        <th class="text-center">Ingresso</th>
                                        <th class="text-center">Nascimento</th>
                                        <th class="text-center">RG</th>
                                        <th class="text-center">Qtd.</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Transação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($inscricoes as $inscricao): ?>
                                    <tr>
                                        <td><?= $inscricao->name ?></td>
                                        <td><?= $inscricao->email ?></td>
                                        <td><?= $inscricao->cell ?></td>
                                        <td><?= $inscricao->item_id ?></td>
                                        <td><?= $inscricao->birthdate ?></td>
                                        <td><?= $inscricao->rg ?></td>
                                        <td><?= $inscricao->quantity ?></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
