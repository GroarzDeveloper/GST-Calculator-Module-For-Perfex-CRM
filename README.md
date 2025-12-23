🧮 GST Calculator Module for Perfex CRM

A free, lightweight GST Calculator module for Perfex CRM.
Access the calculator instantly from the top navbar icon or the sidebar menu, without leaving your workflow.

Built for the community ❤️

✨ Features

✅ One-click access from top navigation bar

✅ Modern popup (modal) interface

✅ Sidebar menu support

✅ Exclusive & Inclusive GST calculation

✅ Clean UI (Black · White · Orange palette)

✅ No core file modifications (upgrade-safe)

✅ Works with latest Perfex CRM versions

📸 Preview

Top navbar calculator icon

Popup GST calculator

Sidebar menu access

(You can add screenshots here later)

📦 Installation

Download or clone this repository

Upload the folder to your Perfex modules directory:

/modules/gst_calculator


Go to Perfex Admin → Setup → Modules

Activate GST Calculator

Done 🎉

🧭 How to Use
Option 1 – Top Navbar

Click the calculator icon in the top-right navbar

GST Calculator popup opens instantly

Option 2 – Sidebar

Navigate to GST Calculator from the left sidebar

Click Open GST Calculator

🧠 GST Logic

Exclusive GST

GST = Amount × GST% / 100
Total = Amount + GST


Inclusive GST

GST = Amount × GST% / (100 + GST%)
Actual = Amount − GST

🛠️ Technical Details

Built using:

Perfex CRM Module System

Bootstrap Modal (native to Perfex)

Vanilla JavaScript

Assets loaded via module hooks

No database changes

No cron jobs

No permissions required

📂 Module Structure
gst_calculator/<br>
├── gst_calculator.php
├── controllers/
│   └── Gst_calculator.php
├── views/
│   ├── modal.php
│   └── sidebar.php
├── assets/
│   ├── css/
│   │   └── gst.css
│   └── js/
│       └── gst.js

🔐 Permissions

Accessible to all admin & staff users

Can be extended with role-based permissions if required

🤝 Contributing

Contributions are welcome!

You can:

Improve UI

Add invoice integration

Add tax presets (5%, 12%, 18%, 28%)

Improve accessibility

Fork → Improve → PR 🚀

📄 License

MIT License
Free to use, modify, and distribute.

❤️ Community & Credits

Developed and shared freely by Groarz
For the Perfex CRM community

If this module helps you, ⭐ the repository and share it with others!

📬 Support

This is a free community module.
For issues or suggestions, please open a GitHub issue.
