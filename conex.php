<?php
//Connect To Database
$link = mysqli_connect('localhost', 'masdigit_ujoptin', 'EV)M0#2[N+on', 'masdigit_joptin');	

mysqli_query($link,"SET time_zone = 'America/Caracas'");
				function consultar($sql,$link){
						$sql_a=mysqli_query($link,$sql);
						if ($sql_a){
							list($r)=mysqli_fetch_array($sql_a);
							return($r);
							}
						else
						{
							return false;
							}	
						}

						mysqli_query ($link,"SET NAMES 'utf8'");


function limpiar($link,$value)
{
					
$_Cadena = htmlspecialchars(trim(addslashes(stripslashes(strip_tags($value)))));
$_Cadena = str_replace(chr(160),"",$_Cadena);
return mysqli_real_escape_string($link,$_Cadena);
										
}						
						
function eliminar($tabla,$id,$link){
	mysqli_query($link,"delete from ".$tabla." where id=".$id."");
	$sms="Eliminado satisfactoriamente";
	return $sms;
}						
function extension($string){
	
	if(strpos($string,'.jpg')==true){
		  $ext ="jpg"; 
	}else if(strpos($string,'.JPG')==true){
		  $ext ="JPG"; 
	}else if(strpos($string,'.jpeg')==true){
		   $ext ="jpeg"; 
	}
	else if(strpos($string,'.png')==true){
		   $ext ="png"; 
	}
	else if(strpos($string,'.gif')==true){
		   $ext ="gif"; 
	}
	else if(strpos($string,'.bmp')==true){
		   $ext ="bmp"; 
	}
	else if(strpos($string,'.txt')==true){
		   $ext ="txt"; 
	}
	else if(strpos($string,'.rtf')==true){
		   $ext ="rtf"; 
	}
	else if(strpos($string,'.pdf')==true){
		   $ext ="pdf"; 
	}
	else if(strpos($string,'.xls')==true){
		   $ext ="xls"; 
	}
	else if(strpos($string,'.csv')==true){
		   $ext ="csv"; 
	}
	else if(strpos($string,'.xlsx')==true){
		   $ext ="xlsx"; 
	}
	else if(strpos($string,'.docx')==true){
		   $ext ="docx"; 
	}
	else{
		   $ext =""; 
	}
	return $ext;
	
	
}



function fprecios($precio){
	
	return number_format($precio,0,".",",");
	
}					

function acortar($string, $length=NULL)
{
    //Si no se especifica la longitud por defecto es 50
    if ($length == NULL)
        $length = 130;
    //Primero eliminamos las etiquetas html y luego cortamos el string
    $stringDisplay = substr(strip_tags($string), 0, $length);
    //Si el texto es mayor que la longitud se agrega puntos suspensivos
    if (strlen(strip_tags($string)) > $length)
        $stringDisplay .= ' ...';
    return $stringDisplay;
}
						

function url($cadena)
{
	$cadena = ucwords(strtolower($cadena));
	$cadena = str_replace(" ","-",trim($cadena));
	$orig = array("á","é","í","ó","ú","ñ",".",",","&");
	$repl = array("a","e","i","o","u","n","","","_");
	$cadena = str_replace($orig,$repl,$cadena);
	$orig = array("Á","É","Í","Ó","Ú","Ñ");
	$repl = array("A","E","I","O","U","N");
	$cadena = str_replace($orig,$repl,$cadena);
	$cadena = str_replace("%","-por-ciento",$cadena);
	$cadena = str_replace("(","",$cadena);
	$cadena = str_replace(")","",$cadena);
	$cadena = str_replace("+","",$cadena);
	$cadena = str_replace("!","",$cadena);
	$cadena = str_replace("----","-",$cadena);
	$cadena = str_replace("---","-",$cadena);
	$cadena = str_replace("--","-",$cadena);
	$cadena = str_replace("/","",$cadena);
	$cadena = str_replace("¡","",$cadena);
	$cadena = str_replace(":","",$cadena);
	$cadena = str_replace("’","",$cadena);
	$cadena = str_replace("“","",$cadena);
	$cadena = str_replace("”","",$cadena);
	$cadena = str_replace("?","",$cadena);
	$cadena = str_replace("¿","",$cadena);$cadena = str_replace("#","",$cadena);
	$cadena=strtolower($cadena);
	return $cadena;
}

function durl($cadena)
{
	$cadena = ucwords(strtolower($cadena));
	$cadena = str_replace("-"," ",trim($cadena));
	
	$cadena=strtolower($cadena);
	return $cadena;
}

function voltear($fecha){
	
	$espa=explode(" ",$fecha);
	
	
	$fecha1=explode("-",$fecha);
	
	$fecha=$fecha1[2]."/".$fecha1[1]."/".$fecha1[0];
	
	return $fecha;
}

function formatDateDiff($start, $end=null) {
    if(!($start instanceof DateTime)) {
        $start = new DateTime($start);
    }
   
    if($end === null) {
        $end = new DateTime();
    }
   
    if(!($end instanceof DateTime)) {
        $end = new DateTime($start);
    }
   
    $interval = $end->diff($start); 
	//$doPlural = function($nb,$str){return $nb>1?$str.'s':$str;}; // adds plurals
   
    $format = array();
    if($interval->y !== 0) {
        $format[] = "%y ".doPlural($interval->y, "a&ntilde;o");
    }
    if($interval->m !== 0) {
        $format[] = "%m ".doPlural($interval->m, "mes");
    }
    if($interval->d !== 0) {
        $format[] = "%d ".doPlural($interval->d, "d&iacute;a");
    }
    if($interval->h !== 0) {
        $format[] = "%h ".doPlural($interval->h, "hr");
    }
    if($interval->i !== 0) {
        $format[] = "%i ".doPlural($interval->i, "min");
    }
    if($interval->s !== 0) {
        if(!count($format)) {
            return "menos de 1 minuto";
        } else {
            $format[] = "%s ".doPlural($interval->s, "seg");
        }
    }
   
    // We use the two biggest parts
    if(count($format) > 1) {
        $format = array_shift($format)." y ".array_shift($format);
    } else {
        $format = array_pop($format);
    }
   
    // Prepend 'since ' or whatever you like
    return "Hace ".$interval->format($format);
}


function imprimirTiempo($fecha,$hora){
        $start_date = new DateTime($fecha." ".$hora);
        $since_start = $start_date->diff(new DateTime(date("Y-m-d")." ".date("H:i:s")));
        echo "Hace ";
        if($since_start->y==0){
            if($since_start->m==0){
                if($since_start->d==0){
                   if($since_start->h==0){
                       if($since_start->i==0){
                          if($since_start->s==0){
                             echo $since_start->s.' segundos';
                          }else{
                              if($since_start->s==1){
                                 echo $since_start->s.' segundo';  
                              }else{
                                 echo $since_start->s.' segundos';  
                              }
                          }
                       }else{
                          if($since_start->i==1){
                              echo $since_start->i.' minuto';  
                          }else{
                            echo $since_start->i.' minutos'; 
                          }
                       }
                   }else{
                      if($since_start->h==1){
                        echo $since_start->h.' hora';
                      }else{
                        echo $since_start->h.' horas'; 
                      }
                   }
                }else{
                    if($since_start->d==1){
                        echo $since_start->d.' día';
                    }else{
                        echo $since_start->d.' días'; 
                    }
                }
            }else{
                if($since_start->m==1){
                   echo $since_start->m.' mes'; 
                }else{
                    echo $since_start->m.' meses';
                }
            }
        }else{
            if($since_start->y==1){
                echo $since_start->y.' año';
            }else{
                echo $since_start->y.' años';
            }
        }
}
?>

