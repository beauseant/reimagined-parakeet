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

                $('.linkdata').on('click', function(event) {
                        event.preventDefault();
                        var val = $(this).attr('href');

                        $('#loader2').show();  
                        $('#loadercont2').show();  
                        $('#shownumber').show();
                        alert ("----");

                        $.ajax({
                                url: 'includes/loaddemo2.php',
                                type: 'POST',
                                data: {data:val},
                                success: function(data) {
                                    $('#shownumber').html(data);
                                },
                                error: function() {
                                    alert("Something went wrong!");
                                }
                        });
                        $('#loader2').hide();
                        $('#loadercont2').hide();
                        $('#shownumber').show();
                });
            });
        </script>
    </head>
    <body>    
    <?php



                        $data = shell_exec ('/usr/bin/python3.9 /var/www/html/topicmodeler/src/topicmodeling/manageModels.py --listTMmodels  --path_TMmodels /data/TMmodels/ 2>&1');
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
                                if ($key == 'number') {
                                    $table = $table . '<td><a class="linkdata" href="'. $value[$key] . '">' . $value[$key] . '</a></td>';
                                } else {
                                    $table = $table . '<td>' . $value[$key] . '</td>';
                                }
                                
                            }                       
                            $table = $table . '</tr>';
                        }
                        
                        $table = $table . '
                                </tbody>
                            </table>';

                        echo $table;

    ?>
                <div id="loadercont2">
                    <div id="loader2"><p>hola</p></div>
                </div>

                <div style="display:none;" id="shownumber" class="animate-bottom">
                    <h2>Loading data!</h2>
                </div>
    </body>
</html>