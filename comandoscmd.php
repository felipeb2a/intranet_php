<?php
    include_once( __DIR__ . '/template/header.php');
?>       
    <section id="listRamais" class="sections degrade" style="">
        <div class="container">
            <div class="content" style="width: 90%;height: 95%;">
                <div class="table-responsive" style="padding-top: 20px; min-height: 600px;">

                    <div class="list-group active">
                        <?php
                            getListLinkHttpsArrayFromCsv('docs/csv/list-sln-comandos-cmd.csv', ',', 'COMANDOS CMD','Nome');
                        ?> 
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php
    include_once('template/footer.php');
?>