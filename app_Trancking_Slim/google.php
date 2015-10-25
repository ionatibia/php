/*blic function output2($nombre,$correo){
        
        include "conexion.php";
        echo "<html>";
        echo "<head>";
        echo "<style type='text/css'>
            html, body { height: 100%; margin: 0; padding: 0; }
            #map { height: 100%; }";
        echo "</style>";
        echo "</head>";
        echo "<body>";
        echo "<div id='map'></div>";
        
            $stmt = $pdo->prepare("SELECT id_usuario from usuarios where nombre = '$nombre' and correo = '$correo'");
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $cont = "SELECT id_usuario,longitud,latitud,tiempo FROM posiciones where id_usuario= ".$user['id_usuario'];
            $stmt2 = $pdo->prepare($cont);
            $stmt2->execute();
        
        foreach($stmt2->fetchAll(PDO::FETCH_ASSOC) as $row){
        
        echo "<script type='text/javascript'>
            var map;
                function initMap() {
                    var myCenter = {lat: 43.32514790854646,lng:-1.9732476904693907};
                    map = new google.maps.Map(document.getElementById('map'), {
                    center: myCenter,
                    zoom: 18
                 });
                
                function addMarker(position,map){
                      var marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: 'Hello World!'
                        });
                }
                
                 addMarker({lat: $row[latitud], lng: $row[longitud]},map);
  
        }";
        echo "</script>";
        }
        echo "<script async defer src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDdQxcqtVk98BQatJ-BzyIIaHyQqCLwv34&callback=initMap'>";
        echo "</script>";
        echo "</body>";
        echo "</html>";
        
        
    }
*/