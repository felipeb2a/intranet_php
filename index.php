<?php
    include_once( __DIR__ . '/template/header.php');
?>      
    <section id="listRamais" class="sections degrade" style="">
        <div class="container">
            <div class="content" style="width: 90%;height: 95%;">
                <div class="table-responsive" style="padding-top: 20px; min-height: 600px;">

                    <div class="list-group active">
                        <?php
                            getListArrayFromCsv('docs/csv/list-sln-instrucoes.csv', ',', 'INSTRUÇÕES TELEFONE','');
                        ?>  
                    </div>

                    <div class="list-group active">
                        <?php
                            getListArrayFromCsv('docs/csv/list-sln-ramais.csv', ',', 'RAMAIS','Funcionário');
                        ?>  
                    </div>

                </div>

            </div>
        </div>
    </section>

<?php
    include_once('template/footer.php');
?>