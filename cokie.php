<?php
/*se crea una cokkie para varios valores*/
setcookie("Prueba[0]","Hola Mundo", time()+3600);
setcookie("Prueba[1]","Adios Mundo", time()+3600);
setcookie("Prueba[2]"," Otro Mensaje", time()+3600);
setcookie("Prueba[3]"," Alberto Nelson", time()+3600);
                          /*pueden igresar cualquier tipo de valor*/ 
for($i=0; $i<count($_COOKIE["Prueba"]); $i++){
setcookie("Prueba[$i]", "otro Mensaje", time()-60);
                        }                          