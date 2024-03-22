<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../assets/css/spinner.css" rel="stylesheet">
        <script src="../assets/vendor/jquery/jquery.min.js"></script>
        <script>
            $(document).ready(function(){

                $('#loader2').hide();
                $('#loadercont2').hide();
                $('#shownumber').hide();                
            });
        </script>
    </head>
    <body>    
    <?php



                        $data = shell_exec ('/usr/bin/python3.9 /var/www/html/topicmodeler/src/topicmodeling/manageModels.py --listTMmodels --path_TMmodels /export/usuarios_ml4ds/lbartolome/Repos/intelcomp_repos/topicmodeler/prueba/TMmodels 2>&1');
                        $data = json_decode ( $data, true);                        


                        $listkeys = array_keys(reset ($data));

                        
                        $table = '
                                <table class="table table-striped">
                                    <thead>
                                        <tr>                                    
                                ';
                        foreach ($listkeys as $value) {
                            $table = $table . '<th scope="col">' . $value . '</th>';
                        }



                        $table = $table . '
                                </tr>
                            </thead>
                            <tbody>';

                        foreach ($data as $value) {
                            $table = $table . '<tr>';
                            foreach ($listkeys as $key){
                                if ($key == 'TrDtSet') {
                                    $lastNCharacters = substr($value[$key], -20);
                                    $table = $table . '<td>' . $lastNCharacters . '</td>';
                                } else {
                                    $table = $table . '<td>' . $value[$key] . '</td>';
                                }                                
                            } 
                            $form = '<form action="trainModel.php" method="post">
                                        <input type="hidden" id="model" name="model" value="'. $value['TrDtSet']  .'">
                                        <a href="#" onclick="this.parentNode.submit();"> Entrenar</a>
                                    </form';
                            
                            
                            $table = $table . '<td>'. $form. '</td>';
                            $table = $table . '</tr>';
                        }
                        
                        $table = $table . '
                                </tbody>
                            </table>';

                        echo $table;


    ?>
                
    </body>
</html>