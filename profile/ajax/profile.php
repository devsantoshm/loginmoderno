<?php include '../../connection/db.php'; ?>
<?php 

function bio(){
	GLOBAL $db;
	if(isset($_GET['bio']) && $_GET['bio'] == 'true'){
		$bio = $_POST['bio'];
		$user_id = $_SESSION['user_id'];
		$Query = $db->prepare("SELECT bio FROM users WHERE id = ?");
		$Query->execute(array($user_id));
		$r = $Query->fetch(PDO::FETCH_OBJ);
		$bio_db = $r->bio;
		if(empty($bio_db)){
			$Insert = $db->prepare("UPDATE users SET bio = ? WHERE id = ?");
			$Insert->execute(array($bio, $user_id));
			if($Insert){
				$_SESSION['bio_success'] = "<i class='fa fa-check-circle'></i> Your Bio is successfully added";
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		} else {
			$Insert = $db->prepare("UPDATE users SET bio = ? WHERE id = ?");
			$Insert->execute(array($bio, $user_id));
			if($Insert){
				$_SESSION['bio_success'] = "<i class='fa fa-check-circle'></i> Your Bio is successfully Updated";
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		}
	}
}

bio();

function add_facebook_account(){
	GLOBAL $db;
	
	if(isset($_GET['add_facebook']) && $_GET['add_facebook'] == 'true'){
		
		$facebook_val = $_POST['facebook_val'];
		$user_id = $_SESSION['user_id'];
		$Query = $db->prepare("SELECT facebook FROM users WHERE id = ?");
		$Query->execute(array($user_id));
		$r = $Query->fetch(PDO::FETCH_OBJ);

		if(empty($r->facebook)){
			$Insert = $db->prepare("UPDATE users SET facebook = ? WHERE id = ?");
			$Insert->execute(array($facebook_val, $user_id));
			if($Insert){
				$_SESSION['facebook_success'] = '<i class="fa fa-check-circle"></i> Your Facebook account is successfully added';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		} else {
			$Insert = $db->prepare("UPDATE users SET facebook = ? WHERE id = ?");
			$Insert->execute(array($facebook_val, $user_id));
			if($Insert){
				$_SESSION['facebook_success'] = '<i class="fa fa-check-circle"></i> Your Facebook account is successfully Updated';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		}
	}
}

add_facebook_account();

function add_linkedin_account(){
	GLOBAL $db;
	if(isset($_GET['add_linkedin']) && $_GET['add_linkedin'] == 'true'){
		$linkedin_val = $_POST['linkedin_val'];
		$user_id = $_SESSION['user_id'];
		$Query = $db->prepare("SELECT linkedin FROM users WHERE id = ?");
		$Query->execute(array($user_id));
		$r = $Query->fetch(PDO::FETCH_OBJ);
		
		if(empty($r->linkedin)){
			$Insert = $db->prepare("UPDATE users SET linkedin = ? WHERE id = ?");
			$Insert->execute(array($linkedin_val, $user_id));
			if($Insert){
				$_SESSION['linkedin_success'] = '<i class="fa fa-check-circle"></i> Your Linkedin account is successfully added';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		} else {
			$Insert = $db->prepare("UPDATE users SET linkedin = ? WHERE id = ?");
			$Insert->execute(array($linkedin_val, $user_id));
			if($Insert){
				$_SESSION['linkedin_success'] = '<i class="fa fa-check-circle"></i> Your Linkedin account is successfully Updated';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		}
	}
}

add_linkedin_account();

?>