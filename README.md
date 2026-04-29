# 🔥 TELEGRAM GIVEAWAY BOT SYSTEM 🔥

<p align="center">
  <b>⚡ Advanced Web App Based Giveaway Bot ⚡</b>
</p>

---

<p align="center">
  <img src="https://img.shields.io/badge/STATUS-ACTIVE-00ff88?style=for-the-badge">
  <img src="https://img.shields.io/badge/VERSION-v1.0-blue?style=for-the-badge">
  <img src="https://img.shields.io/badge/API-SUPERFAST⚡-orange?style=for-the-badge">
  <img src="https://img.shields.io/badge/MADE%20BY-YOU-red?style=for-the-badge">
</p>

---

<p align="center">
  <img src="https://readme-typing-svg.herokuapp.com?color=00F7FF&size=26&center=true&vCenter=true&width=700&lines=Telegram+Giveaway+System;Auto+Winner+Selection;Secure+Web+App;Admin+Control+Panel">
</p>
--------------------------------------------------



<p align="center">
  <a href="https://t.me/Unknown_Reason">
    <img src="https://img.shields.io/badge/🚀%20Telegram%20Channel%20Join-00d2ff?style=for-the-badge&logo=telegram">
  </a>
</p>

--------------------------------------------------


⚡ FEATURES

- Telegram Web App Integration  
- Auto Random Winner Selection  
- Real-time Updates (No Reload)  
- Admin Panel Control  
- Secure Access (Telegram Only)  
- Mobile Friendly UI  
- Winner Animation  

--------------------------------------------------

🧠 HOW IT WORKS

User → Open Bot → Open Web App → Click JOIN  
↓  
Data Database me store hota hai  
↓  
Admin Stop karta hai  
↓  
System Random Winner pick karta hai  
↓  
Winner ko Telegram DM milta hai 🎉  

--------------------------------------------------

⚙️ SETUP GUIDE

STEP 1: REQUIREMENTS

- Domain (yourdomain.com)  
- Hosting / VPS  
- PHP 7+  
- MySQL Database  

--------------------------------------------------

STEP 2: DATABASE

CREATE TABLE giveaway_config (
  id INT AUTO_INCREMENT PRIMARY KEY,
  status ENUM('active','stopped'),
  prize VARCHAR(255),
  end_time DATETIME,
  winner_id BIGINT
);

CREATE TABLE participants (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id BIGINT UNIQUE,
  name VARCHAR(255),
  photo_url TEXT
);

--------------------------------------------------

STEP 3: CONFIGURE FILES

db.php  
your_db_name  
your_db_user  
your_db_password  

-------------------------

bot.php  
PASTE_YOUR_BOT_TOKEN  
PASTE_YOUR_TG_ID  
https://YourDomain.com/index.html  

-------------------------

api.php  
PASTE_YOUR_BOT_TOKEN  
PASTE_YOUR_TG_ID  

-------------------------

index.html  
PASTE_YOUR_TG_ID  

--------------------------------------------------

STEP 4: WEBHOOK

https://api.telegram.org/bot<TOKEN>/setWebhook?url=https://yourdomain.com/bot.php  

--------------------------------------------------

🎮 USAGE

USER:
- Start Bot  
- Open Giveaway  
- Click JOIN  

ADMIN:
- Set Prize  
- Set Time  
- Start Giveaway  
- Stop & Pick Winner  


--------------------------------------------------

🌐 FOLLOW ME

<p align="center">
  <a href="https://youtube.com/YOUR_CHANNEL">
    <img src="https://img.shields.io/badge/📺%20YouTube-SUBSCRIBE-FF0000?style=for-the-badge&logo=youtube">
  </a>
  <a href="https://instagram.com/YOUR_USERNAME">
    <img src="https://img.shields.io/badge/📸%20Instagram-FOLLOW-E4405F?style=for-the-badge&logo=instagram">
  </a>
  <a href="https://t.me/YOUR_USERNAME">
    <img src="https://img.shields.io/badge/💬%20Telegram-JOIN-0088cc?style=for-the-badge&logo=telegram">
  </a>
</p>

--------------------------------------------------
