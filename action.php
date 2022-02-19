<?php
	session_start();
//$connect = new PDO("mysql:host=localhost;dbname=selectof_vue", "selectof_vue", "#99#Webexpert");
	include 'include/config.php';
	$database = new Connection();
	$pdo = $database->openConnection();
$received_data = json_decode(file_get_contents("php://input"));
$data = array();
if($received_data->action == 'imagini')
{
	echo $data = 'http://westbuy.ro/files/products/'.$received_data->id;
	
}
if($received_data->action == 'fetchall')
{
 $query = "
 SELECT * FROM `clienti`
 ORDER BY `poz` ASC
 ";
 $statement = $pdo->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
	
 }
 echo json_encode($data);
}
	if($received_data->action == 'incarca_categorii'){
		$query = 'SELECT * FROM `categories`  ORDER BY `poz` ASC
 ';
		$statement = $pdo->prepare($query);
		$statement->execute();
		$count='0';
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$datac['count']=$count++;
			$datac[] = $row;
			
		}
		
		echo json_encode($datac);

	}

/*if($received_data->action == 'insert')
{
 $data = array(
  ':first_name' => $received_data->firstName,
  ':last_name' => $received_data->lastName
 );

 $query = "
 INSERT INTO 'clienti'
 (first_name, last_name)
 VALUES (:first_name, :last_name)
 ";

 $statement = $pdo->prepare($query);

 $statement->execute($data);

 $output = array(
  'message' => 'Data Inserted'
 );

 echo json_encode($output);
}*/
if($received_data->action == 'fetchSingle')
{
 $query = "
 SELECT * FROM `clienti`
 WHERE id = '".$received_data->id." '
 ";

 $statement = $pdo->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 foreach($result as $row)
 {
  $data['id'] = $row['id'];
  $data['nume'] = $row['nume'];
  $data['email'] = $row['email'];
  $data['telefon'] = $row['telefon'];
  $data['comentarii'] = $row['comentarii'];
  $data['activ'] = $row['activ'];
  $data['poz'] = $row['poz'];
 }

 echo json_encode($data);
}
	if($received_data->action == 'updatepoz')
	{
		$data = array(
			':poz' => $received_data->poz,
			':id' => $received_data->id
		);
		$query = '
 UPDATE `clienti`
 SET 	poz = :poz
 WHERE id = :id
 ';
		$statement = $pdo->prepare($query);
		$statement->execute($data);
		/*$output = array(
			'message' => 'Pozitia a fost modificata!'
		);*/
		echo json_encode($output);
	}
	if($received_data->action == 'updatestatus')
	{
		$data = array(
			':activ' => $received_data->activ,
			':id' => $received_data->id
		);
		$query = '
 UPDATE `clienti`
 SET 	activ = :activ
 WHERE id = :id
 ';
		$statement = $pdo->prepare($query);
		$statement->execute($data);
		echo json_encode($output);
	}
if($received_data->action == 'update')
{
 $data = array(
  ':nume' => $received_data->nume,
  ':email' => $received_data->email,
  ':telefon' => $received_data->telefon,
  ':id'   => $received_data->hiddenId
 );

 $query = "
 UPDATE `clienti`
 SET nume = :nume,
 					email = :email,
     			telefon = :telefon
 WHERE id = :id
 ";

 $statement = $pdo->prepare($query);

 $statement->execute($data);

 /*$output = array(
  'message' => 'Modificarea a fost efectuata!'
 );*/

 echo json_encode($output);
}

if($received_data->action == 'delete')
{

	$query = "
 DELETE FROM `clienti`
 WHERE id = '".$received_data->id."'
 ";
 $statement = $pdo->prepare($query);

 $statement->execute();

 echo json_encode($output);
}

?>