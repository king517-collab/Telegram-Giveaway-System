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

<h2 align="center">⚡ FEATURES</h2>

<p align="center">
  <img src="https://img.shields.io/badge/⚡-REALTIME_UPDATES-00ffcc?style=for-the-badge">
  <img src="https://img.shields.io/badge/🎲-AUTO_WINNER-ffcc00?style=for-the-badge">
  <img src="https://img.shields.io/badge/🔒-SECURE_ACCESS-ff4444?style=for-the-badge">
</p>

<br>

<table align="center">
<tr>
<td align="center">

### 🎯 Web App Integration  
Run giveaway directly inside Telegram Web App  

</td>

<td align="center">

### 🎲 Random Winner  
100% fair automatic winner selection system  

</td>
</tr>

<tr>
<td align="center">

### ⚡ Live Updates  
No refresh needed, everything updates instantly  

</td>

<td align="center">

### 🎛️ Admin Panel  
Control start, stop & re-roll easily  

</td>
</tr>

<tr>
<td align="center">

### 🔒 Secure System  
Only Telegram users allowed access  

</td>

<td align="center">

### 📱 Responsive UI  
Works smoothly on mobile & desktop  

</td>
</tr>

<tr>
<td align="center">

### 🎉 Winner Animation  
Cool popup + celebration effects  

</td>

<td align="center">

### 🚀 Fast Performance  
Optimized backend with instant response  

</td>
</tr>
</table>



--------------------------------------------------

<h2 align="center">🧠 HOW IT WORKS</h2>

<p align="center">
  <img src="https://img.shields.io/badge/FLOW-AUTOMATED-00d2ff?style=for-the-badge">
</p>

<br>

<table align="center">
<tr>
<td align="center">

### 👤 Step 1  
User opens the Telegram Bot  

</td>

<td align="center">

### 🌐 Step 2  
Clicks **Open Giveaway** → Web App loads  

</td>
</tr>

<tr>
<td align="center">

### 🎯 Step 3  
User clicks **JOIN** button  

</td>

<td align="center">

### 💾 Step 4  
User data saved in database  

</td>
</tr>

<tr>
<td align="center">

### 🛡️ Step 5  
Admin monitors & controls giveaway  

</td>

<td align="center">

### ⏹️ Step 6  
Admin stops giveaway  

</td>
</tr>

<tr>
<td align="center">

### 🎲 Step 7  
System selects random winner  

</td>

<td align="center">

### 🎉 Step 8  
Winner gets Telegram notification  

</td>
</tr>
</table>

<br>

<p align="center">
  🔥 Fully Automated • No Manual Work • Fair Selection System
</p>

--------------------------------------------------

<h2 align="center">⚙️ SETUP GUIDE</h2>

<h3 align="center">🚀 Step 1: Environment Setup</h3>

<p align="center">
  <img src="https://img.shields.io/badge/REQUIRED-SYSTEM_SETUP-00d2ff?style=for-the-badge">
</p>

<br>

<table align="center">
<tr>
<td align="center">

### 🌐 Domain  
You need a working domain  
Example: `yourdomain.com`

</td>

<td align="center">

### 🖥️ Hosting / VPS  
Use cPanel, DirectAdmin or VPS server  

</td>
</tr>

<tr>
<td align="center">

### 🐘 PHP Version  
PHP **7.4 or higher** required  

</td>

<td align="center">

### 🗄️ Database  
MySQL or MariaDB required  

</td>
</tr>

<tr>
<td align="center">

### 🔗 SSL Certificate  
HTTPS must be enabled for webhook  

</td>

<td align="center">

### 🤖 Telegram Bot  
Create bot using BotFather  

</td>
</tr>
</table>

<br>

<p align="center">
  ⚡ Make sure all requirements are ready before moving to next step
</p>

--------------------------------------------------

<h3 align="center">🗄️ Step 2: Database Setup</h3>

<p align="center">
  <img src="https://img.shields.io/badge/DATABASE-MYSQL_READY-00ff99?style=for-the-badge">
</p>

<br>

<table align="center">
<tr>
<td align="center">

### 🧱 Create Database  
Create a new database  
Example: `giveaway_db`

</td>

<td align="center">

### ⚙️ Open phpMyAdmin  
Go to hosting panel → phpMyAdmin  

</td>
</tr>

<tr>
<td align="center">

### 📥 Import Tables  
Run SQL queries in SQL tab  

</td>

<td align="center">

### ✅ Verify Setup  
Check tables are created successfully  

</td>
</tr>
</table>

---

### 📌 SQL TABLE STRUCTURE

```sql
CREATE TABLE giveaway_config (
  id INT AUTO_INCREMENT PRIMARY KEY,
  status ENUM('active','stopped') DEFAULT 'stopped',
  prize VARCHAR(255),
  end_time DATETIME,
  winner_id BIGINT
);

CREATE TABLE participants (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id BIGINT UNIQUE,
  name VARCHAR(255),
  photo_url TEXT,
  join_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

<p align="center">
  ⚡ Make sure tables are created before moving to next step
</p>

--------------------------------------------------

<h3 align="center">🧩 Step 3: Configure Files</h3>

<p align="center">
  <img src="https://img.shields.io/badge/CONFIG-EDIT_FILES-ffaa00?style=for-the-badge">
</p>

<br>

<table align="center">
<tr>
<td align="center">

### 🗄️ db.php  
Add your database credentials  

</td>

<td align="center">

### 🤖 bot.php  
Add bot token, admin ID & web app URL  

</td>
</tr>

<tr>
<td align="center">

### ⚙️ api.php  
Add bot token & admin ID  

</td>

<td align="center">

### 🌐 index.html  
Add admin Telegram ID  

</td>
</tr>
</table>

---

## 📌 File Configuration Details

### 🗄️ db.php
```php
your_db_name  
your_db_user  
your_db_password  
```

---

### 🤖 bot.php
```php
PASTE_YOUR_BOT_TOKEN  
PASTE_YOUR_TG_ID  
https://YourDomain.com/index.html  
```

---

### ⚙️ api.php
```php
PASTE_YOUR_BOT_TOKEN  
PASTE_YOUR_TG_ID  
```

---

### 🌐 index.html
```js
PASTE_YOUR_TG_ID  
```

---

<p align="center">
  ⚡ Make sure all values are correctly updated before proceeding
</p>

--------------------------------------------------

<h3 align="center">🔗 Step 4: Webhook Setup</h3>

<p align="center">
  <img src="https://img.shields.io/badge/WEBHOOK-CONNECTED-00ccff?style=for-the-badge">
</p>

<br>

<table align="center">
<tr>
<td align="center">

### 🌐 Connect Bot  
Link your bot with server  

</td>

<td align="center">

### ⚡ Real-Time Updates  
Bot will receive instant updates  

</td>
</tr>
</table>

---

## 📌 Set Webhook URL

Paste this in your browser:

```bash
https://api.telegram.org/bot<TOKEN>/setWebhook?url=https://yourdomain.com/bot.php
```

---

## ✅ Success Response

If setup is correct, you will see:

```
{"ok":true,"result":true}
```

---

<p align="center">
  ⚡ Your bot is now live and connected to server
</p>

--------------------------------------------------

<h2 align="center">🎮 Usage Guide</h2>

<p align="center">
  <img src="https://img.shields.io/badge/SYSTEM-READY-00ff88?style=for-the-badge">
</p>

<br>

<table align="center">
<tr>
<td align="center">

## 👤 User Panel  

- Open Telegram Bot  
- Click **Open Giveaway**  
- Click **JOIN**  
- You are entered in giveaway  

</td>

<td align="center">

## 🛡️ Admin Panel  

- Enter Prize Name  
- Set Time (minutes)  
- Click **Start Giveaway**  
- Click **Stop & Pick Winner**  
- Use **Re-roll** if needed  

</td>
</tr>
</table>

---

<p align="center">
  🎉 Fully Automated System • No Manual Work • Fair Winner Selection
</p>

--------------------------------------------------

🌐 FOLLOW ME

<p align="center">
  <a href="https://youtube.com/@Unknown_Reason">
    <img src="https://img.shields.io/badge/📺%20YouTube-SUBSCRIBE-FF0000?style=for-the-badge&logo=youtube">
  </a>
  <a href="https://instagram.com/6_hf0">
    <img src="https://img.shields.io/badge/📸%20Instagram-FOLLOW-E4405F?style=for-the-badge&logo=instagram">
  </a>
  <a href="https://t.me/Unknown_Reason">
    <img src="https://img.shields.io/badge/💬%20Telegram-JOIN-0088cc?style=for-the-badge&logo=telegram">
  </a>
</p>

--------------------------------------------------

<h2 align="center">⭐ Support & Contribution</h2>

<p align="center">
  <img src="https://img.shields.io/badge/SUPPORT-OPEN_SOURCE-ff66cc?style=for-the-badge">
</p>

<br>

<p align="center">
  If you like this project, show some love ❤️
</p>

<p align="center">
  ⭐ <b>Star</b> the repository <br>
  🍴 <b>Fork</b> and customize it <br>
  📢 <b>Share</b> with your friends <br>
  🚀 Build something amazing
</p>

<br>

<p align="center">
  <a href="#">
    <img src="https://img.shields.io/badge/⭐_STAR_THIS_REPO-SUPPORT-ffd700?style=for-the-badge">
  </a>
  <a href="#">
    <img src="https://img.shields.io/badge/🍴_FORK_PROJECT-CONTRIBUTE-00c3ff?style=for-the-badge">
  </a>
  <a href="#">
    <img src="https://img.shields.io/badge/📢_SHARE_PROJECT-SPREAD-ff4444?style=for-the-badge">
  </a>
</p>

---

<h2 align="center">💙 Best Wishes</h2>

<p align="center">
  🚀 Wishing you success in your projects <br>
  💡 Keep learning & building <br>
  🔥 Turn your ideas into reality <br>
</p>

<br>

<p align="center">
  <b>Made with ❤️ for Developers</b>
</p>

--------------------------------------------------










