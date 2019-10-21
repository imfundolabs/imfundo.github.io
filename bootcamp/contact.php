<?php
	if (isset($_POST['cf_sch_name']) && isset($_POST['cf_stu1_name']) && isset($_POST['cf_stu1_class']) && isset($_POST['cf_stu2_name']) && isset($_POST['cf_stu2_class']) && isset($_POST['cf_stu3_name']) && isset($_POST['cf_stu3_class']) && isset($_POST['cf_tch_name']) && isset($_POST['cf_tch_class']) && isset($_POST['cf_tch_email']) && isset($_POST['cf_tch_phone'])) {
		$sch_name = $_POST['cf_sch_name'];
		$stu1_name = $_POST['cf_stu1_name'];
		$stu1_class = $_POST['cf_stu1_class'];
		$stu1_email = $_POST['cf_stu1_email'];
		$stu1_phone = $_POST['cf_stu1_phone'];
		$stu2_name = $_POST['cf_stu2_name'];
		$stu2_class = $_POST['cf_stu2_class'];
		$stu2_email = $_POST['cf_stu2_email'];
		$stu2_phone = $_POST['cf_stu2_phone'];
		$stu3_name = $_POST['cf_stu3_name'];
		$stu3_class = $_POST['cf_stu3_class'];
		$stu3_email = $_POST['cf_stu3_email'];
		$stu3_phone = $_POST['cf_stu3_phone'];
		$tch_name = $_POST['cf_tch_name'];
		$tch_class = $_POST['cf_tch_class'];
		$tch_email = $_POST['cf_tch_email'];
		$tch_phone = $_POST['cf_tch_phone'];
		
		$mail_to = 'mayank@imfundo.io';
		$subject = 'DUCIC-TBI Bootcamp Registration: '.$sch_name;
		
		$body_message = 'School Name: '.$sch_name."\n\n";
		$body_message .= 'Student1 Name: '.$stu1_name."\n";
		$body_message .= 'Student1 Class: '.$stu1_class."\n";
		$body_message .= 'Student1 Phone: '.$stu1_phone."\n";
		$body_message .= 'Student1 E-Mail: '.$stu1_email."\n\n";
		$body_message .= 'Student2 Name: '.$stu2_name."\n";
		$body_message .= 'Student2 Class: '.$stu2_class."\n";
		$body_message .= 'Student2 Phone: '.$stu2_phone."\n";
		$body_message .= 'Student2 E-Mail: '.$stu2_email."\n\n";
		$body_message .= 'Student3 Name: '.$stu3_name."\n";
		$body_message .= 'Student3 Class: '.$stu3_class."\n";
		$body_message .= 'Student3 Phone: '.$stu3_phone."\n";
		$body_message .= 'Student3 E-Mail: '.$stu3_email."\n\n";
		$body_message .= 'Teacher Name: '.$tch_name."\n";
		$body_message .= 'Teacher Class: '.$tch_class."\n";
		$body_message .= 'Teacher Phone: '.$tch_phone."\n";
		$body_message .= 'Teacher E-Mail: '.$tch_email."\n\n";
		
		$headers = 'From: '.$tch_email."\r\n";
		$headers .= 'Reply-To: '.$tch_email."\r\n";
		
		$mail_status = mail($mail_to, $subject, $body_message, $headers);
		
		if ($mail_status) { ?>
			<script language="javascript" type="text/javascript">
				alert('Thank you for your registration. Looking forward to see you at the camp.');
				window.location = 'index.html';
			</script>
		<?php
		}
		else { ?>
			<script language="javascript" type="text/javascript">
				alert('Sorry, registration failed. Please, send an email to mayank@imfundo.io');
				window.location = 'index.html';
			</script>
		<?php
		}
	}
	else { ?>
		<script language="javascript" type="text/javascript">
			alert('Sorry, registration failed. Please, send an email to mayank@imfundo.io');
			window.location = 'index.html';
		</script>
	<?php
	}
?>