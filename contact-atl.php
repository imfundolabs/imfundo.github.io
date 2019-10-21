<?php
	if (isset($_POST['cf_name']) && isset($_POST['cf_email']) && isset($_POST['cf_subject']) && isset($_POST['cf_school']) && isset($_POST['cf_message'])) {
		$field_name = $_POST['cf_name'];
		$field_email = $_POST['cf_email'];
		$field_number = $_POST['cf_number'];
		$field_school = $_POST['cf_school'];
		$field_subject = $_POST['cf_subject'];
		$field_message = $_POST['cf_message'];
		
		$mail_to = 'mayank@imfundo.io';
		$subject = 'Message from a site visitor: '.$field_name.' || SUBJECT: '.$field_subject;
		
		$body_message = 'From: '.$field_name."\n";
		$body_message .= 'E-mail: '.$field_email."\n";
		$body_message .= 'Number: '.$field_number."\n";
		$body_message .= 'School: '.$field_school."\n";
		$body_message .= 'Message: '.$field_message;
		
		$headers = 'From: '.$field_email."\r\n";
		$headers .= 'Reply-To: '.$field_email."\r\n";
		
		$mail_status = mail($mail_to, $subject, $body_message, $headers);
		
		if ($mail_status) { ?>
			<script language="javascript" type="text/javascript">
				alert('Thank you for the message. We will contact you shortly.');
				window.location = 'atal-tinkering-labs.html#subscribe';
			</script>
		<?php
		}
		else { ?>
			<script language="javascript" type="text/javascript">
				alert('Message failed. Please, send an email to mayank@imfundo.io');
				window.location = 'atal-tinkering-labs.html#subscribe';
			</script>
		<?php
		}
	}
	else { ?>
		<script language="javascript" type="text/javascript">
			alert('Message failed. Please, send an email to mayank@imfundo.io');
			window.location = 'atal-tinkering-labs.html#subscribe';
		</script>
	<?php
	}
?>