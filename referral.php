Last --

<?php
// referral.php (To be included in your registration page)

function generateReferralCode($user_id) {
  return base_convert($user_id, 10, 36); // Converts user ID to a unique referral code
}

$referral_code = generateReferralCode($user_id); // After registration

// Store the referral code in the database
$stmt = $conn->prepare("UPDATE users SET referral_code = ? WHERE id = ?");
$stmt->bind_param('si', $referral_code, $user_id);
$stmt->execute();

// Send the referral code to the user
echo "Your referral link: www.dollarcash.com?ref=" . $referral_code;
?>
