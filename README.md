[contributors-shield]: https://img.shields.io/github/contributors/hassan7303/Auto-filling-alt-tag-for-images.svg?style=for-the-badge
[contributors-url]: https://github.com/hassan7303/Auto-filling-alt-tag-for-images/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/hassan7303/Auto-filling-alt-tag-for-images.svg?style=for-the-badge&label=Fork
[forks-url]: https://github.com/hassan7303/Auto-filling-alt-tag-for-images/network/members
[stars-shield]: https://img.shields.io/github/stars/hassan7303/Auto-filling-alt-tag-for-images.svg?style=for-the-badge
[stars-url]: https://github.com/hassan7303/Auto-filling-alt-tag-for-images/stargazers
[license-shield]: https://img.shields.io/github/license/hassan7303/Auto-filling-alt-tag-for-images.svg?style=for-the-badge
[license-url]: https://github.com/hassan7303/Auto-filling-alt-tag-for-images/blob/master/LICENSE.md
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-blue.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/hassan-ali-askari-280bb530a/
[telegram-shield]: https://img.shields.io/badge/-Telegram-blue.svg?style=for-the-badge&logo=telegram&colorB=555
[telegram-url]: https://t.me/hassan7303
[instagram-shield]: https://img.shields.io/badge/-Instagram-red.svg?style=for-the-badge&logo=instagram&colorB=555
[instagram-url]: https://www.instagram.com/hasan_ali_askari
[github-shield]: https://img.shields.io/badge/-GitHub-black.svg?style=for-the-badge&logo=github&colorB=555
[github-url]: https://github.com/hassan7303
[email-shield]: https://img.shields.io/badge/-Email-orange.svg?style=for-the-badge&logo=gmail&colorB=555
[email-url]: mailto:hassanali7303@gmail.com
[website-shield]: https://img.shields.io/badge/-Website-blue.svg?style=for-the-badge&logo=laravel&colorB=555
[website-url]: https://hsnali.ir


[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]
[![Telegram][telegram-shield]][telegram-url]
[![Instagram][instagram-shield]][instagram-url]
[![GitHub][github-shield]][github-url]
[![Email][email-shield]][email-url]
[![Website][website-shield]][website-url]


# Auto Filling Alt Tag for Images

## Description
A WordPress plugin that automatically adds `alt` attributes to images that are missing one or have an empty `alt` attribute. The plugin scans the content and assigns the closest heading (`h1`, `h2`, etc.) above the image as the `alt` text.

## Features
- Automatically assigns `alt` attributes to images without one.
- Extracts text from the nearest heading (`h1` to `h6`) above the image.
- Provides a default `alt` text if no heading is found.

## **Installation**

1. **Download** the plugin as a `.php` file.
2. **Upload** the file to the `wp-content/plugins` directory of your WordPress site.
3. Log in to your WordPress dashboard and navigate to the **Plugins** section.
4. Locate **Auto Alt Tag for Images** in the plugins list and click **Activate**.

## How It Works
1. The plugin hooks into the `the_content` filter.
2. Scans the post content for `<img>` tags.
3. If an `img` tag has no `alt` attribute or the `alt` is empty:
   - Searches for the nearest heading (`h1`, `h2`, etc.) above the image in the HTML structure.
   - Assigns the text content of the heading as the `alt` attribute.
   - If no heading is found, assigns a default `alt` text (`default alt text`).

## **Automatic Updates**
This plugin connects to the [GitHub repository](https://github.com/hassan7303/Auto-filling-alt-tag-for-images) and automatically fetches updates when a new version is released.  
Make sure that WordPress automatic updates for plugins are enabled.

## **Contribution**

1. Fork the repository on GitHub.
2. Implement your changes.
3. Create a Pull Request to submit your changes.

---


# پر کردن خودکار برچسب Alt برای تصاویر

## توضیحات
یک افزونه وردپرس که به طور خودکار ویژگی‌های «alt» را به تصاویری که یکی ندارند یا دارای ویژگی «alt» خالی هستند اضافه می‌کند. این افزونه محتوا را اسکن می کند و نزدیکترین عنوان ('h1'، 'h2'، و غیره) را در بالای تصویر به عنوان متن 'alt' اختصاص می دهد.

### امکانات
- به طور خودکار ویژگی های «alt» را به تصاویر بدون آن اختصاص می دهد.
- متن را از نزدیکترین عنوان ('h1' تا 'h6') بالای تصویر استخراج می کند.
- در صورت یافتن هیچ عنوان، یک متن جایگزین پیش‌فرض ارائه می‌کند.
 

## **نصب**

۱. فایل ZIP افزونه را از [گیت‌هاب](https://github.com/hassan7303/Auto-filling-alt-tag-for-images) دانلود کنید.

۲. وارد پیشخوان وردپرس شوید.

۳. به مسیر **افزونه‌ها** → **افزودن** → **بارگذاری افزونه** بروید.

۴. فایل ZIP دانلود شده را آپلود کرده و افزونه را فعال کنید.

## استفاده
1. افزونه به فیلتر «the_content» متصل می‌شود.
2. محتوای پست را برای برچسب‌های «<img>» اسکن می‌کند.
3. اگر یک تگ «img» فاقد ویژگی «alt» باشد یا «alt» خالی باشد:
 - نزدیکترین عنوان ('h1'، 'h2'، و غیره) را در بالای تصویر در ساختار HTML جستجو می کند.
 - محتوای متن عنوان را به عنوان ویژگی alt اختصاص می دهد.
 - اگر عنوانی پیدا نشد، یک متن جایگزین پیش‌فرض (متن جایگزین پیش‌فرض) اختصاص می‌دهد.


## **بروزرسانی خودکار**
این افزونه به [مخزن گیت‌هاب](https://github.com/hassan7303/Auto-filling-alt-tag-for-images) متصل است و در صورت وجود نسخه جدید به صورت خودکار آن را دریافت می‌کند.  
مطمئن شوید که آپدیت‌های خودکار وردپرس برای افزونه‌ها فعال باشد.



## **مشارکت**

۱. این مخزن را در گیت‌هاب Fork کنید.

۲. تغییرات موردنظر خود را اعمال کنید.

۳. یک Pull Request برای ارسال تغییرات ایجاد کنید.
