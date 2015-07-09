<?php


class Log_In_DAO {
	
	public static function Login() 
		{
		
			if (isset ( $_POST ['submit'] ))
				{
					$pseudo = $_POST ['pseudo'] ;
					$password = $_POST ['password'] ;
			
					
						if (empty ( $pseudo )) 
							{
								echo "veuillez saisir votre pseudo<br/>";
							}
			
							
						if (empty ( $password )) 
							{
								echo "veuillez saisir votre mot de passe<br/>";
							}
							
							
						else 
							{
				
								mysql_connect ( 'localhost', 'root', '' );
								mysql_select_db ( 'dahouet_complet' );
				
								//	$password = md5 ( $password );
								$login = mysql_query ( "SELECT * FROM proprietaire  WHERE NOMMBR='$pseudo' AND PWMBR='$password'" );
								$rows = mysql_num_rows ( $login );
								/*var_dump($login);*/
				
						if ($rows == 1) 
							{
								echo "bonjour" . $pseudo;
					
								$_SESSION ['pseudo'] = $pseudo;
								header ( 'Location: ../view/index.php' );
								echo "bonjour" . $pseudo;
					
							} else
								echo "user ou mp mauvais";
						}
				}
	}
}

?>