# CLAUDE.md — Mahalaxmi Motors Website

This file is the complete source of truth for converting the existing static HTML website into a Next.js application. Every page, component, image, form, contact detail, and content block is documented here.

---

## 1. Project Overview

**Business Name:** Mahalaxmi Motors  
**Type:** Maruti Suzuki ARENA & NEXA Authorized Service Station  
**Location:** Shahabad – Ladwa Road, SHAHABAD MARKANDA – 136135, Haryana, India  
**Website:** https://mahalaxmimotors.co.in  
**GitHub:** https://github.com/kanhaiyaa1/mahalaxmimotors  
**Brand Hashtag:** #ApkaApnaMahalaxmiMotors  
**Tagline:** "We Look After Your Car To Ensure It Looks After You."  
**Established:** 1996  

---

## 2. Contact Information (Used Across All Pages)

| Purpose | Number |
|---|---|
| General / Customer Support | +91 98124 03007 |
| Service Booking & Support | +91 98124 37433 |
| Insurance Renewal | +91 98965 65499 |
| Insurance Renewal (2nd) | +91 99911 36433 |
| Bodyshop & Accident Repair | +91 98120 96433 |

**Emails:**
- contact@mahalaxmimotors.co.in
- support@mahalaxmimotors.co.in
- marutishdm@gmail.com

**Working Hours:** 08:30 AM – 06:30 PM (Monday to Saturday). Sunday off.

**Social Media:**
- Facebook: https://www.facebook.com/mahalaxmimotors.shahabadmarkanda
- Instagram: https://www.instagram.com/mahalaxmimotors.shahabad
- Google Maps Embed ID: `0x390e4bce971c9e4f:0xea98ddf1f17ccdf8`
- Google Maps Embed URL: `https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d76690.71325744416!2d76.82102786903229!3d30.161863233395852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390e4bce971c9e4f%3A0xea98ddf1f17ccdf8!2sMahalaxmi%20Motors%20(Maruti%20Suzuki%20Authorised%20Service%20Station)!5e1!3m2!1sen!2sin!4v1766978003826!5m2!1sen!2sin`

---

## 3. Navigation Structure

All pages share the same navigation bar. The nav items are:

| Label | Current HTML href | Next.js Route |
|---|---|---|
| Home | `/` | `/` |
| About Us | `about-us.html` | `/about-us` |
| Service | `maruti-suzuki-service.html` | `/maruti-suzuki-service` |
| Accessories | `accessories.html` | `/accessories` |
| Insurance | `insurance.html` | `/insurance` |
| Careers | `careers.html` | `/careers` |
| Contact Us | `contact-us.html` | `/contact-us` |

> **Note:** Finance (`finance.html`) is commented out in the nav but the page exists. Include it as a hidden/inactive route. The Cars dropdown (Alto K10, WagonR, Celerio, Swift, S-Presso, Dzire, Ertiga, Brezza, Victoris, Eeco) is also commented out in nav but may be re-enabled.

**Mobile nav** also shows: "Review Us on Google", Facebook, Instagram links.

**Header also contains:**
- Logo: `/images/logo.png` and `/images/logo1.png`
- Phone number displayed top-right: `+91 98124 03007`

---

## 4. Shared Footer (All Pages)

The footer background is `rgb(45, 52, 148)` (deep blue), text `#cbd5e1`.

**Footer Columns:**

**Column 1 – Contact Information:**
- Service Booking & Support: 98124 37433
- Insurance Renewal: 98965 65499, 99911 36433
- Bodyshop & Accident Repair: 98120 96433
- Emails: contact@mahalaxmimotors.co.in, support@mahalaxmimotors.co.in, marutishdm@gmail.com

**Column 2 – Key Contacts (department heads or roles — exact names from footer)**

**Column 3 – Quick Links:**
- Home, About Us, Car Service, Accessories, Insurance, Careers, Contact Us, Driving School

**Column 4 – Address & Social:**
- Mahalaxmi Motors, Shahabad – Ladwa Road, SHAHABAD MARKANDA – 136135, Haryana
- Facebook, Instagram links
- Privacy Policy, Terms and Conditions, Disclaimer links

**Footer bottom bar:**
- `© Mahalaxmi Motors. All rights reserved.`

---

## 5. Pages — Full Content Documentation

---

### 5.1 Home Page (`index.html` → `/`)

**Meta:**
- Title: `Mahalaxmi Motors`
- Description: `Mahalaxmi Motors, Shahbad is a Maruti Suzuki ARENA & NEXA Authorized Service Station at Ladwa Road, Shahabad Markanda. Call us at +91 98124 03007 for car servicing, maintenance, genuine spare parts, periodic service, repairs, and expert support for all Maruti Suzuki vehicles.`

**Sections (in order):**

#### Section: About Us Intro
Heading: `About Us`  
Body:
> Mahalaxmi Motors is your trusted Maruti Suzuki Authorized Service Partner, proudly serving Shahabad Markanda and nearby regions since 1996. Driven by trust and built on service excellence, we blend decades of local credibility with Maruti Suzuki's global standards. Our state-of-the-art workshop and bodyshop are equipped with modern technology to handle everything from routine servicing to complex repairs under one roof. Backed by official Warranty and Extended Warranty support, we ensure complete peace of mind. Our strength lies in our qualified, factory-trained technicians who deliver transparent, reliable, and genuine care every time. At Mahalaxmi Motors, we don't just service cars — we build long-term relationships as #ApkaApnaMahalaxmiMotors.

Button: "Read More" → `/about-us`

#### Section: Maruti Suzuki Service Center in Shahabad Markanda, Haryana
Heading: `Maruti Suzuki Service Center in Shahabad Markanda, Haryana`  
Address block: `Mahalaxmi Motors, Shahabad - Ladwa Road, SHAHABAD MARKANDA - 136135, Haryana`  
Contact line:
- SERVICE: 9812437433
- BODY SHOP: 9812096433
- INSURANCE: 9896565499, 9991136433

**Image:** `https://images.jdmagicbox.com/comp/shahbad/d3/9999p1744.1744.101224204111.n4d3/catalogue/mahalaxmi-motors-shahabad-shahbad-car-repair-and-services-61csapqfns.jpg`  
**Google Maps embed** (see embed URL in section 2)

#### Section: Media Block (black background)
- Left: Image `https://mahalaxmimotors.co.in/images/nexa-service.JPG` (local: `/images/nexa-service.JPG`)
- Right: Video `https://mahalaxmimotors.co.in/images/mahalaxmimotors-building-video.mp4` (local: `/images/mahalaxmimotors-building-video.mp4`) — autoplay, loop, muted, playsinline, playbackRate: 6

#### Section: Schedule a Service (Form)
Heading: `Schedule a Service`  
Form fields:
- Name* (text, pattern: `^([a-zA-Z ]){2,30}$`)
- Phone Number* (tel, pattern: `[6-9]{1}[0-9]{9}`, maxlength: 10)
- Email ID* (email)
- Kms Driven* (number, min: 0)
- Message (text)
- Model (select):
  - Alto K10, WagonR, Celerio, Swift, Dzire, Ertiga, Brezza, Victoris, Eeco, S-Presso, Other
- Disclaimer checkbox: "I hereby authorize to send notifications on SMS / Message / Promotional / Informational Messages."
- Submit button

**Form submission:** POST via AJAX to `send.php` (PHPMailer backend). In Next.js this becomes an API Route (`/api/send`).

#### Section: Why Choose Us
Heading: `Why Choose Us`  
Body (two paragraphs):
> Maruti Suzuki is a reliable and trusted brand known for its transparency and commitment to excellence. At Maruti Suzuki Authorised Service Centre, we have skilled manpower who possess in-depth knowledge of Maruti Suzuki cars. This helps us ensure better customer satisfaction by delivering high-quality car service in a timely manner.

> Furthermore, Maruti Suzuki's vast service network extends a strong sense of assurance to its customers and also provides the convenience of doorstep pickup and delivery for car servicing. And to elevate the overall car ownership experience, Maruti Suzuki offers loyalty and reward programs which can be redeemed at Maruti Suzuki Authorised Service Centres.

Button: "Read More" → `/about-us`

#### Section: Maruti Suzuki Insurance + Service You Can Trust (Two-column)
**Left: Maruti Suzuki Insurance**
- Title: `Maruti Suzuki Insurance`
- Text: Protect your car with comprehensive insurance coverage designed specifically for Maruti Suzuki owners — reliable, transparent, and hassle-free.
- Point: Free Pick up and drop facility available*
- T&C: (Terms and Conditions apply)
- Button: "Read More" → `https://www.marutisuzukiinsurance.com`

**Right: Service You Can Trust**
- Title: `Service You Can Trust`
- Text: Our business is driven by highly skilled and trained manpower, helping us create new benchmarks in service excellence. Our technicians are professionally trained by MSIL and hold **Bronze, Silver, and Advanced certifications**, ensuring your vehicle is always in expert hands.
- Point: Free Pick up and drop facility available*
- T&C: (Terms and Conditions apply)
- Button: "Read More" → `https://www.marutisuzuki.com/genuine-accessories`

#### Section: Car Range
Heading: `Car Range`

| Car | Category |
|---|---|
| Alto K10 | Hatchback |
| WagonR | Hatchback |
| Celerio | Hatchback |
| Swift | Hatchback |
| S-Presso | Hatchback |
| Dzire | Sedan |
| Ertiga | MUV/SUV |
| Brezza | MUV/SUV |
| Victoris | MUV/SUV |
| Eeco | Van |

Each car card has: Name, starting price (from Maruti CDN), Download Brochure, Compare Variants, EMI Calculator actions.

#### Section: Accessories
Heading: `Accessories`  
Links to accessories page.

#### Section: FAQ
Heading: `Frequently Asked Questions`  
(Questions loaded from Maruti CDN API — fetch and render dynamically or hardcode.)

---

### 5.2 About Us (`about-us.html` → `/about-us`)

**Meta:**
- Title: `About Us Mahalaxmi Motors, Shahbad | Maruti Suzuki ARENA`
- Description: `Mahalaxmi Motors, Shahbad Maruti Suzuki ARENA Showroom offers the best facility and the experience of a world-class automobile showroom in Ladwa Road, Shahabad Markanda. Our showroom is managed by knowledgeable professionals to ensure that we offer only the best quality service at all times.`
- Robots: `noindex, nofollow`

**Sections (in order):**

#### Hero
Eyebrow: `DRIVEN BY TRUST. BUILT FOR SERVICE. SINCE 1996.`  
Heading: `Your Maruti Suzuki Authorized Service Partner`  
Subtext: `Experience genuine care, expertise, and transparency from Shahabad's trusted service experts since 1996.`  
Badges: Authorized Since 1996 | State-of-the-Art Facility | Official Warranty Support  
Button: "Read More" → `/maruti-suzuki-service`

#### About Us (Introduction)
Heading: `About Us`  
Image: `https://content.jdmagicbox.com/comp/shahbad/d3/9999p1744.1744.101224204111.n4d3/catalogue/mahalaxmi-motors-shahabad-shahbad-car-repair-and-services-wtpl8lzdkc.jpg`  
Body:
> Mahalaxmi Motors is a Maruti Suzuki ARENA & NEXA Authorized Service Station, equipped with state-of-the-art infrastructure and modern service facilities to meet the complete car maintenance needs of customers in Shahabad Markanda and nearby areas. The service center is operated by a team of well-trained professionals committed to delivering reliable, transparent, and customer-focused service.
>
> Established in 1996, Mahalaxmi Motors began its journey as an authorized Maruti Suzuki service station and has steadily grown over the years. Today, it has a strong and trusted presence across the districts of Kurukshetra and Ambala, serving thousands of satisfied Maruti Suzuki customers.

#### Team Cards (simple photo grid)
| Name | Image |
|---|---|
| Nipun Garg | `/images/nipun garg.jpeg` |
| Vijay Garg | `/images/vijay garg.jpeg` |
| Ashutosh Garg | `/images/ashutosh garg .jpeg` |

#### Team Gallery (mosaic layout)
- Left large: `/images/team3.jpeg` — caption: "Our Team / People who power Mahalaxmi Motors"
- Top right: `/images/team2.jpeg`
- Bottom right left: `/images/team4.jpeg`
- Bottom right right: `/images/team1.jpeg`

#### Why Choose Us
(Same content as Homepage "Why Choose Us" section — see 5.1)

#### Insurance + Service You Can Trust
(Same two-column block as Homepage — see 5.1)

#### Photo Gallery (12 images, fancybox lightbox)
All sourced from JD Magic Box CDN:
1. `https://images.jdmagicbox.com/v2/comp/kurukshetra/d3/.../maruti-suzuki-9y610o.jpg`
2. `https://images.jdmagicbox.com/comp/kurukshetra/d3/.../maruti-suzuki-3nr7ia.jpg`
3. `https://images.jdmagicbox.com/comp/kurukshetra/d3/.../maruti-suzuki-16pcf0v.jpg`
4. `/images/insurance.jpeg`
5. `https://images.jdmagicbox.com/comp/shahbad/d3/.../npuq4s6e0u.jpg`
6. `https://images.jdmagicbox.com/comp/shahbad/d3/.../eqlaeohn93.jpg`
7. `https://images.jdmagicbox.com/comp/shahbad/d3/.../41mjwgizut.jpg`
8. `https://images.jdmagicbox.com/comp/shahbad/d3/.../61csapqfns.jpg`
9. `https://images.jdmagicbox.com/comp/shahbad/d3/.../nemnkoz2ah.jpg`
10. `https://images.jdmagicbox.com/comp/shahbad/d3/.../z0jqc2957l.jpg`
11. `https://content.jdmagicbox.com/comp/kurukshetra/d3/.../16pcf0v.jpg`
12. `/images/just-call.jpeg`

#### Our Promise
Heading: `Our Promise`  
Quote: `"We Look After Your Car To Ensure It Looks After You."`  
Body: `We deliver on this promise with qualified, trained staff and a commitment to genuine service.`  
Hashtag: `#ApkaApnaMahalaxmiMotors`

#### Maruti Suzuki Service in Shahabad Markanda
Heading: `Maruti Suzuki Service in Shahabad Markanda`  
Body: `Mahalaxmi Motors is Your Maruti Suzuki Authorized Service Partner, proudly serving Shahabad Markanda and the surrounding region since 1996. As #ApkaApnaMahalaxmiMotors, we combine decades of local trust with the global standards of Maruti Suzuki.`

Three feature cards:
1. **State-of-the-Art Workshop** — Latest infrastructure and cutting-edge technology
2. **Complete Bodyshop** — Routine maintenance to complex body repairs
3. **Warranty Support** — Official WARRANTY & EXTENDED WARRANTY

#### Legacy: Over 40 Years of Business Excellence
Heading: `Legacy: Over 40 Years of Business Excellence`  
Lead: `Our story is rooted in a tradition of entrepreneurial spirit led by Mr. Vijay Kumar Garg (B.Sc. Hons. 1972).`

Timeline cards:
| Year | Event |
|---|---|
| 1972 | Mr. Garg joined the family business as Managing Partner of M/S Vijay Kumar Pawan Kumar, dealing in Commission Agents, Rice, and Fertilizers. |
| 1979 | Business expanded with the addition of Mahalaxmi Modern Rice Mills. |
| 1982 | Added fertilizer distributorship of Gujarat Narmada (GNFC). |
| 1996 | **Mahalaxmi Motors established as Maruti Authorized Service Station** — built on Mr. Garg's 40+ years of business experience including 19 years in automobile trade. |

Footer note: `Today, Mr. Ashu Tosh Garg (28 years experience) and Mr. Nipun Garg, MBA (14 years experience) continue the legacy with extensive commerce and automobile expertise.`

#### Our Commitment: Authorized Excellence
Heading: `Our Commitment: Authorized Excellence`  
Badge: `A-Category MASS (Maruti Authorized Service Station)` — Ranked as GPM (General Performance Maintenance)

Four commitment cards:
1. **State-of-the-Art Facility** — Equipped with latest and modern infrastructure including specialized Maruti Mobile Support Workshop & DMS. Our cutting-edge technology and expert technicians deliver top-notch service ensuring complete customer satisfaction.
2. **Comprehensive Service** — We undertake all jobs including accidental repairs under Maruti Insurance (MI). Offering complete facilities with official WARRANTY & EXTENDED WARRANTY support under one roof.
3. **Expert Team** — Qualified, factory-trained, and committed manpower. Our expert technicians deliver specialized, authorized care ensuring your vehicle receives the best service every time.
4. **Our Approach** — Building long-term relationships through transparency, expertise, and personalized attention. We don't just fix cars; we partner with you for your vehicle's lifelong well-being.

#### The Next Generation Leadership
Heading: `The Next Generation Leadership`

**Mr. Ashu Tosh Garg** (28 Years Experience)
- Born: 1976
- Education: Graduate from S D College, Ambala
- Achievement: Elected General Secretary in 1995
- Joined Business: September 22, 1996
- Expertise: 28 years of automobile business experience

**Mr. Nipun Garg** (14 Years Experience, Strategic Corporate Experience)
- Education: Pharma Graduate (Kurukshetra University) & MBA (Pune)
- 2009: Management Trainee at Dr Reddy Laboratories, Baddi
- 2010: Experience at Dabur India
- Joined Mahalaxmi Motors: 2011

#### Vision, Mission & Quality Policy
Heading: `Vision, Mission & Quality Policy`

Three cards:
1. **Our Vision** — "We Look After Your Car To Ensure It Looks After You."
2. **Our Approach** — Building long-term relationships through transparency, expertise, and personalized attention. We partner with you for your vehicle's lifelong well-being.
3. **Quality Policy** — "To meet Customer Satisfaction through continual improvement in Services & systems at all levels."

---

### 5.3 Contact Us (`contact-us.html` → `/contact-us`)

**Meta:**
- Title: `Contact Us Mahalaxmi Motors, Ladwa Road, Shahabad Markanda | Maruti Suzuki ARENA`
- Description: `Contact +91 98124 03007 Maruti Suzuki ARENA Mahalaxmi Motors, Shahbad Ladwa Road, Shahabad Markanda for any enquiries, suggestions or complaints that you may have. You can also visit the showroom to know more about the services on offer.`

**Sections:**

#### Contact Form
Heading: `Contact Us`  
Form fields:
- Name* (text, pattern: `^([a-zA-Z ]){2,30}$`)
- Phone Number* (tel, pattern `[6-9]{1}[0-9]{9}`)
- Email ID* (email)
- Message* (text)
- Disclaimer checkbox: "I hereby authorize to send notifications on SMS / Message / Promotional / Informational Messages."
- Submit button

**Also shows:**
- Address block: `Shahabad - Ladwa Road, SHAHABAD MARKANDA - 136135, Haryana`
- Address block 2: `Mahalaxmi Motors, Shahabad - Ladwa Road, SHAHABAD MARKANDA - 136135, Haryana`
- Phone: +91 98124 03007
- Google Maps embed (same as homepage)

---

### 5.4 Accessories (`accessories.html` → `/accessories`)

**Meta:**
- Title: `Maruti Suzuki Genuine Car Accessories at Mahalaxmi Motors, Ladwa Road, Shahabad Markanda. | Maruti Suzuki ARENA`
- Description: `Maruti Suzuki ARENA at Ladwa Road, Shahabad Markanda provides genuine Car Accessories for Maruti Suzuki ARENA cars, like seat covers, Child seat, alloy wheels, LED door sill guard, and many more at reasonable prices. Visit Mahalaxmi Motors, Ladwa Road, Shahabad Markanda ARENA showroom to get the price list of these genuine car accessories.`

**Sections:**

#### Accessories Hero
Heading: `Accessories`  
Body: `Enhance your driving experience with 100% Genuine Maruti Suzuki Accessories. From premium aesthetics to everyday safety and comfort, discover accessories designed specifically for your car — no compromises, no shortcuts.`

**Accessories listed (Genuine Maruti Suzuki):**
- Seat Covers
- Child Seat
- Alloy Wheels
- LED Door Sill Guard
- (others from Maruti CDN feed)

> In Next.js, accessories data is fetched from the Maruti CDN API or stored as a static JSON file in `/data/accessories.json`.

---

### 5.5 Careers (`careers.html` → `/careers`)

**Meta:**
- Title: `Job Opportunities at Mahalaxmi Motors, Ladwa Road, Shahabad Markanda | Maruti Suzuki ARENA`
- Description: `Looking to start a Career in the Automobile industry? Maruti Suzuki ARENA Mahalaxmi Motors, Ladwa Road, Shahabad Markanda has multiple opportunities in different profiles at their Showroom/Dealership. Click here to know more.`

**Sections:**

#### Employee Benefits & Perks
Heading: `Employee Benefits & Perks`  
Subtext: `Comprehensive benefits designed for your well-being and growth`

Four benefit cards:

1. **Professional Training & Certification**
   - MSIL Bronze Level Certification for entry-level technicians
   - MSIL Silver Level Certification for experienced professionals
   - MSIL Advanced Level Certification for senior technicians
   - Regular skill upgrade workshops and seminars
   - Hands-on training with latest Maruti models

2. **Technology & Tools**
   - Access to latest automotive diagnostic equipment
   - Modern workshop with specialized tools
   - Maruti DMS (Dealer Management System) training
   - Digital service bay management systems
   - Mobile workshop support technology

3. **Health & Wellness**
   - Comprehensive health insurance coverage
   - Annual health check-ups
   - Safe and modern working environment
   - Accident insurance and workplace safety measures
   - Personal protective equipment provided

4. **Additional Benefits**
   - Performance-based incentives and bonuses
   - Paid leave and festival holidays
   - Employee recognition programs
   - Uniform and grooming allowance
   - Transportation allowance for eligible roles

#### Current Job Opportunities
Heading: `Current Job Opportunities`  
Subtext: `Explore positions that match your skills and aspirations`

**Job 1: Service Technician**
- Type: Full Time | Multiple Openings | All Levels Welcome
- Description: Perform vehicle maintenance, diagnostics, and repairs using advanced automotive technology and genuine Maruti parts.
- Requirements: ITI/Diploma in Automobile
- Experience: Freshers to 5+ years
- Certification: Bronze/Silver/Advanced
- Location: Shahabad Markanda
- CTA: "Apply Now" (opens modal)

**Job 2: Service Advisor**
- Type: Full Time | Customer Facing
- Description: Act as the point of contact between customers and service department. Provide technical advice, estimate costs, and ensure customer satisfaction.
- Requirements: Graduate with technical knowledge
- Experience: 2-5 years preferred
- Skills: Communication & Technical expertise
- Language: Hindi, English (Punjabi plus)
- CTA: "Apply Now" (opens modal)

**Job 3: Customer Relationship Manager**
- Type: Full Time
- Description: Manage customer relationships, handle insurance claims, coordinate warranty services, and ensure exceptional customer experience throughout the service journey.
- CTA: "Apply Now" (opens modal)

**Job 4: Parts Executive**
- Type: Full Time
- Description: Oversee parts inventory, manage stock levels, coordinate with suppliers, and ensure timely availability of genuine Maruti parts for service operations.
- CTA: "Apply Now" (opens modal)

#### Simple Application Process
Heading: `Simple Application Process`

Three steps:
1. Browse available positions and find one that matches your skills
2. Click "Apply Now" and fill in the application form
3. Our team will contact you within 2-3 business days

#### Apply Now Modal
Fields:
- Full Name*
- Email Address*
- Phone Number*
- Position Applying For (select)
- Years of Experience
- Upload Resume (file input)
- Cover Letter / Additional Information (textarea)
- Submit Application button

**Form submission:** POST to `send.php` (Next.js: `/api/careers`)

---

### 5.6 Finance (`finance.html` → `/finance`)

**Meta:**
- Title: `Maruti Suzuki Car Finance Mahalaxmi Motors, Shahbad | Maruti Suzuki ARENA`
- Description: `Maruti Suzuki ARENA at Ladwa Road, Shahabad Markanda offer a variety of finance options for owning a Maruti Suzuki ARENA car. Calculate your down payments, interest rate & monthly EMIs.`

**Sections:**

#### Finance Steps
Heading: `4 Simple Steps to Finance your car`

Steps:
1. Select your car model
2. Choose your preferred down payment
3. Select loan tenure
4. Get your EMI

#### Pre-Approved Loan Check
Subtext: `Please confirm your details to check your pre approved loan offer.`

Finance form fields:
- Name
- Phone
- Email
- Car Model (select: all Maruti models)
- Down Payment
- Loan Tenure

> **Note:** Finance JS is in `/js/HyperLocal/Arena/finance.js` and `/js/Finance.js`. In Next.js, migrate this logic to a React component with useState for EMI calculation.

#### Terms & Conditions (MSIL)
Full MSIL T&C text is embedded inline. Key points:
- Must be competent to contract per Indian Contract Act, 1872
- Copyright owned by MSIL
- Maruti Suzuki trademarks owned by MSIL and Suzuki Motor Corporation, Japan
- Information subject to change without notice
- Unauthorized use of MSIL systems strictly prohibited

---

### 5.7 Insurance (`insurance.html` → `/insurance`)

**Meta:**
- Title: `Maruti Suzuki Car Insurance Offers at Mahalaxmi Motors, Ladwa Road, Shahabad Markanda | Maruti Suzuki ARENA`
- Description: `Looking for the right car Insurance for Your Maruti Suzuki ARENA Car in Ladwa Road, Shahabad Markanda? Mahalaxmi Motors, Shahbad provides the best insurance options that come with a wide scope of coverage. Speak to us to get Free Car Insurance Quotes.`

**Sections:**

#### Insurance Hero
Heading: `Insurance`  
Body: `Enhance your peace of mind with comprehensive Maruti Suzuki Insurance. From reliable coverage to hassle-free claims and cashless repairs, protect your car with insurance designed specifically for Maruti owners — simple, secure, and stress-free.`

Key benefits shown (from Maruti CDN):
- Cashless Repairs at Authorized Service Centres
- Hassle-Free Claim Process
- Comprehensive Coverage
- Free Pick-up & Drop*

CTA: "Get Free Insurance Quote" — leads to enquiry form or Maruti Insurance portal.

---

### 5.8 Maruti Suzuki Service (`maruti-suzuki-service.html` → `/maruti-suzuki-service`)

**Meta:**
- Title: `Car Service at Mahalaxmi Motors, Ladwa Road, Shahabad Markanda. | Maruti Suzuki ARENA`
- Description: `Maruti Suzuki ARENA at Ladwa Road, Shahabad Markanda. provides the quality services to their customers. Mahalaxmi Motors, Ladwa Road, Shahabad Markanda has good reputation, due to their product performances. Please fill the form to book your service.`

**Sections:**

#### Book Your Car Service (Form)
Heading: `BOOK YOUR CAR SERVICE`  
Same form as Schedule a Service on homepage (Name, Phone, Email, Kms Driven, Model, Message, disclaimer checkbox, Submit).

#### Service Description
Heading: `Maruti Suzuki Service Center in Shahabad Markanda, Haryana`

Body text:
> A seamless car ownership experience goes hand in hand with timely car maintenance. If you've been looking for a "car service centre near me" for your Maruti Suzuki car, you've come to the right Maruti Suzuki Authorized Service Station! Mahalaxmi Motors, Ladwa Road, Shahabad Markanda is a top-notch Maruti Suzuki Service Centre near you where you can book a service appointment with ease and avail a variety of car services at the best cost. Whether you're looking for car repair or inspection, want to book a car wash or get the wheel alignment done, Mahalaxmi Motors, Ladwa Road, Shahabad Markanda is the best Alto, Alto K10, WagonR, Celerio, Swift, Dzire, Ertiga, Brezza, Victoris, Eeco, S-Presso service centre in Shahabad Markanda, Kurukshetra & Ambala that you can easily visit for car maintenance. Mahalaxmi Motors, Ladwa Road, Shahabad Markanda is a tech-enabled and state-of-the-art service centre near you where you can rest assured about the quality of services, be it booking a car wash or getting work done at the auto body shop. Book a service appointment today!

**Services offered (from Maruti CDN widget):**
- Periodic Maintenance Service
- Running Repair
- Accident Repair / Bodyshop
- Wheel Alignment & Balancing
- Car Wash & Cleaning
- Warranty Repairs
- Extended Warranty
- Genuine Spare Parts

**Service banners (local images):**
- `/images/imported/MS-Service Booking Page-web-banner_1366x400.webp`
- `/images/imported/MSSCommercial-desktop.webp`
- `/images/imported/Ms-service-web-banner_1366x400_02.png`
- `/images/imported/Ms-service-web-banner_ServiceBook_1366x400.png`
- `/images/imported/car-service-web.webp`

---

### 5.9 Driving School (`driving-school.html` → `/driving-school`)

**Meta:**
- Title: `Driving School at Mahalaxmi Motors, Ladwa Road, Shahabad Markanda | Maruti Suzuki ARENA`
- Description: `Maruti Suzuki ARENA Driving School is situated in Ladwa Road, Shahabad Markanda. Get World Class Driving Training by Mahalaxmi Motors, Ladwa Road, Shahabad Markanda. We have approved, well-trained and experienced driving instructors, and car driving courses at reasonable rates.`

**Sections:**

#### Driving School Intro
Heading: `Driving School`

#### Benefits Of Learning With Us
Heading: `Benefits Of Learning With Us`

Three benefit blocks (icons from Maruti CDN):
1. **Safe Driving** — Don't just learn to drive, but to drive safe with expert trainers
2. **Driving Simulator** — Get an on-road driving experience with advanced simulators
3. **Personalised Courses** — Customise courses keeping your needs and strengths in mind

#### Contact Us (Driving School)
Heading: `Contact Us`

Contact items:
- Customer Support number: +91 98124 03007
- Email: contact@mahalaxmimotors.co.in / marutishdm@gmail.com
- Working Hours: 08:30 AM – 06:30 PM (Monday to Saturday), Sunday off

---

### 5.10 Disclaimer (`disclaimer.html` → `/disclaimer`)

**Meta:**
- Title: `Maruti Suzuki Car Insurance Offers at Mahalaxmi Motors, Ladwa Road, Shahabad Markanda | Maruti Suzuki ARENA`
- Robots: `noindex, nofollow`

**Full Content:**

**Heading:** `Disclaimer`

**Intro:** The information provided on the Mahalaxmi Motors website (https://mahalaxmimotors.co.in) is for general informational purposes only.

1. **No Service Guarantee** — While Mahalaxmi Motors is an authorized Maruti Suzuki service partner, the content available on this website does not constitute a binding service agreement, warranty, or guarantee unless explicitly confirmed in writing by our team.

2. **Service Outcomes & Pricing** — Actual service costs, timelines, and outcomes may vary depending on vehicle condition, inspection results, availability of spare parts, and other operational factors.

3. **Accuracy of Information** — We make every effort to ensure the accuracy of the information presented on this website. However, Mahalaxmi Motors does not guarantee completeness, reliability, or absolute accuracy and reserves the right to update content without prior notice.

4. **Third-Party Links** — Our website may reference or link to third-party platforms such as Google, Facebook, or Instagram. Mahalaxmi Motors has no control over and assumes no responsibility for the content, policies, or services of these external platforms.

5. **Vehicle & Parts Availability** — Product availability, pricing, and specifications are subject to change based on manufacturer updates. Please contact us directly for the most current information.

6. **Not Legal or Financial Advice** — Nothing on this website constitutes legal, financial, or professional advice. For insurance, finance, or warranty-related decisions, please consult with our team or relevant professionals.

---

### 5.11 Terms & Conditions (`terms-and-conditions.html` → `/terms-and-conditions`)

**Meta:** Same as Disclaimer (noindex, nofollow)

**Heading:** `Terms & Conditions`

**Intro:** These Terms & Conditions govern the use of the Mahalaxmi Motors website (https://mahalaxmimotors.co.in). By accessing or using this website, you agree to be bound by these terms.

1. **Website Purpose** — This website is intended to provide general information about Mahalaxmi Motors, including service booking, insurance assistance, and customer support. Any misuse, unauthorized access, or attempt to disrupt the website is strictly prohibited.

2. **Accuracy of Information** — While we strive to keep all information accurate and up to date, details related to services, pricing, availability, and timings are subject to change without prior notice.

3. **Appointment Confirmation** — Submission of any enquiry or service request form does not guarantee an appointment. Confirmation is subject to availability and will be communicated by our team.

4. **Intellectual Property** — All content on this website, including text, logos, images, and branding, is the property of Mahalaxmi Motors unless otherwise stated. Unauthorized reproduction, copying, or distribution is prohibited.

5. **Limitation of Liability** — Mahalaxmi Motors shall not be held liable for any loss, damage, or inconvenience arising from the use of this website or reliance on its content.

6. **Governing Law** — These terms are governed by Indian law. Any disputes shall be subject to the jurisdiction of courts in Haryana, India.

---

### 5.12 Privacy Policy (`privacy-policy.html` → `/privacy-policy`)

**Meta:** Same as Disclaimer (noindex, nofollow)

**Heading:** `Privacy Policy`

**Intro:** At Mahalaxmi Motors, your privacy matters. This policy explains how we collect, use, and protect your information when you interact with our website https://mahalaxmimotors.co.in.

1. **Information We Collect** — When you submit forms on our website, we may collect your name, email address, phone number, vehicle details, and service-related information. We do not collect payment or banking information through this website.

2. **How We Use Your Information** — The information shared by you is used strictly for service bookings, responding to enquiries, insurance coordination, customer support, and sending service-related or promotional communications where consent is provided.

3. **Cookies** — Our website uses cookies to improve user experience and analyze basic website traffic. Cookies do not grant access to your personal data or device.

4. **Data Security** — We implement reasonable technical and administrative safeguards to protect your information. However, no method of data transmission over the internet is completely secure.

5. **Data Sharing** — We do not sell or share your personal information with third parties for commercial purposes. Information may be shared with Maruti Suzuki India Limited (MSIL) for service-related purposes only.

6. **Your Rights** — You may request to access, correct, or delete your personal information by contacting us at contact@mahalaxmimotors.co.in.

7. **Changes to This Policy** — We reserve the right to update this Privacy Policy. Changes will be posted on this page with an updated date.

---

## 6. Images & Media Assets

All images are in `/images/`. Below is the complete inventory:

| File | Used In | Description |
|---|---|---|
| `images/logo.png` | Header (all pages) | Primary Mahalaxmi Motors logo |
| `images/logo1.png` | Header (all pages) | Alternate logo variant |
| `images/nexa-service.JPG` | Homepage media block | Service center photo |
| `images/mahalaxmimotors-building-video.mp4` | Homepage media block | Building exterior video (autoplay, 6x speed) |
| `images/mahalaxmi-poster.jpeg` | General use | Dealership poster |
| `images/insurance.jpeg` | Gallery, About | Insurance section image |
| `images/just-call.jpeg` | Gallery | "Just Call Us" promotional image |
| `images/maruti-insurance.jpeg` | Insurance page | Insurance hero image |
| `images/nexa-service.JPG` | Homepage | NEXA service photo |
| `images/nipun garg.jpeg` | About Us | Nipun Garg team photo |
| `images/vijay garg.jpeg` | About Us | Vijay Garg team photo |
| `images/ashutosh garg .jpeg` | About Us | Ashutosh Garg team photo |
| `images/team1.jpeg` | About Us gallery | Team photo 1 |
| `images/team2.jpeg` | About Us gallery | Team photo 2 |
| `images/team3.jpeg` | About Us gallery | Team photo 3 (large left tile) |
| `images/team4.jpeg` | About Us gallery | Team photo 4 |
| `images/down-arrow.png` | UI utility | Down arrow icon |
| `images/Finance/1-2.png` | Finance page | Finance step illustration |
| `images/HyperLocal/Arena/Sprite_logo.png` | Maruti CDN sprite | Maruti branding sprite |
| `images/imported/MS-Service Booking Page-web-banner_1366x400.webp` | Service page | Service booking banner |
| `images/imported/MSSCommercial-desktop.webp` | Service page | Commercial banner |
| `images/imported/Ms-service-web-banner_1366x400_02.png` | Service page | Service banner variant |
| `images/imported/Ms-service-web-banner_ServiceBook_1366x400.png` | Service page | Service booking banner |
| `images/imported/car-service-web.webp` | Service page | Car service image |
| `images/imported/logo.jpeg` | Imported legacy | Old logo |

> In Next.js, move all images to `/public/images/` and reference them as `/images/filename`. Use `next/image` component for optimization.

---

## 7. Fonts

| File | Used In |
|---|---|
| `fonts/TR Renfrew.TTF` | Custom brand font (used in logo/heading areas if needed) |

> In Next.js, place in `/public/fonts/` and load via `next/font/local` or CSS `@font-face`.

---

## 8. Backend / Forms

### Current Backend
- Language: PHP
- Files: `send.php`, `default.php`, `PHPMailer/Exception.php`, `PHPMailer/PHPMailer.php`, `PHPMailer/SMTP.php`
- All forms POST to `send.php` via AJAX

### Next.js Migration
Replace PHP backend with **Next.js API Routes** (or Route Handlers in App Router):

| Current | Next.js Route |
|---|---|
| `send.php` (service/contact form) | `/api/send` |
| `send.php` (careers apply form) | `/api/careers` |

Use **Nodemailer** instead of PHPMailer. Install: `npm install nodemailer`.

**Environment variables needed (`.env.local`):**
```
SMTP_HOST=smtp.gmail.com
SMTP_PORT=587
SMTP_USER=marutishdm@gmail.com
SMTP_PASS=<app_password>
MAIL_TO=contact@mahalaxmimotors.co.in
```

---

## 9. Sitemap (`sitemap.xml`)

```xml
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url><loc>https://www.mahalaxmimotors.com/</loc><priority>1.0</priority><changefreq>weekly</changefreq></url>
  <url><loc>https://www.mahalaxmimotors.com/about-us.html</loc><priority>0.8</priority><changefreq>monthly</changefreq></url>
  <url><loc>https://www.mahalaxmimotors.com/contact-us.html</loc><priority>0.8</priority><changefreq>monthly</changefreq></url>
  <url><loc>https://www.mahalaxmimotors.com/accessories.html</loc><priority>0.7</priority><changefreq>weekly</changefreq></url>
  <url><loc>https://www.mahalaxmimotors.com/careers.html</loc><priority>0.6</priority><changefreq>monthly</changefreq></url>
  <url><loc>https://www.mahalaxmimotors.com/finance.html</loc><priority>0.7</priority><changefreq>monthly</changefreq></url>
  <url><loc>https://www.mahalaxmimotors.com/insurance.html</loc><priority>0.7</priority><changefreq>monthly</changefreq></url>
  <url><loc>https://www.mahalaxmimotors.com/maruti-suzuki-service.html</loc><priority>0.8</priority><changefreq>monthly</changefreq></url>
  <url><loc>https://www.mahalaxmimotors.com/driving-school.html</loc><priority>0.7</priority><changefreq>monthly</changefreq></url>
  <url><loc>https://www.mahalaxmimotors.com/disclaimer.html</loc><priority>0.3</priority><changefreq>yearly</changefreq></url>
  <url><loc>https://www.mahalaxmimotors.com/terms-and-conditions.html</loc><priority>0.3</priority><changefreq>yearly</changefreq></url>
  <url><loc>https://www.mahalaxmimotors.com/privacy-policy.html</loc><priority>0.3</priority><changefreq>yearly</changefreq></url>
</urlset>
```

> In Next.js App Router, generate this dynamically via `app/sitemap.ts`.

---

## 10. Third-Party Scripts & Analytics

| Script | ID | Purpose |
|---|---|---|
| Google Tag Manager (GTM) | `GTM-WZGKRGPQ` | Tag management |
| Google Ads (gtag) | `AW-698688125` | Google Ads conversion |
| Google Ads (gtag) | `AW-782069395` | Google Ads conversion 2 |
| Google Site Verification | `hFYPamI-NbBfk4kqzt21iCfunxpr1YYeyUEO-A32ntg` | Search Console |
| Facebook Domain Verification | `e53p4hv44l9hrl9vh95ngr51rqx3df` | Facebook |
| AppDynamics | `BO-AAB-CSK` | Performance monitoring |
| Adobe DTM | `launch-37f2aa7aa375.min.js` | Adobe analytics |
| Criteo | Account: `99167` | Retargeting |

> In Next.js, add GTM via `@next/third-parties` or a custom `<Script>` in `app/layout.tsx`. Remove AppDynamics and Adobe DTM unless specifically required.

---

## 11. External CDN Assets (Maruti CDN)

Many CSS, JS, and image assets are loaded from:
`https://AZ-CI-AFDE-HYPL-PROD-04-feapdxcug4g4ayc0.a02.azurefd.net/`

Key CSS files loaded from this CDN:
- `/css/HyperLocal/Arena/common_arena.css`
- `/css/HyperLocal/Arena/arena_optimization.css`
- `/css/HyperLocal/Arena/subscribe_arena.css`
- `/css/HyperLocal/Arena/custom_seo.css`
- `/css/HyperLocal/Arena/Arena_Cardetails.css`
- `/css/HyperLocal/Arena/finance.css`
- `/css/HyperLocal/Arena/service_arena.css`
- `/css/HyperLocal/Common/CarAccessories.css`
- `/css/HyperLocal/Nexa/career_nexa.css`

Key JS files from CDN:
- `jquery-1.12.4.min.js`
- `common_arena_commonnew.min.js` (also local)
- `customCar.min.js` (also local)
- `service_arena.js` (also local)

> **In Next.js:** Replace all Maruti CDN CSS with custom Tailwind CSS or CSS Modules. Avoid dependency on external CDN CSS. Keep local copies of JS files that need to be retained, or rewrite as React components.

---

## 12. Next.js Project Structure (Recommended)

```
mahalaxmimotors-nextjs/
├── app/
│   ├── layout.tsx                  # Root layout: header, footer, GTM
│   ├── page.tsx                    # Homepage
│   ├── about-us/
│   │   └── page.tsx
│   ├── contact-us/
│   │   └── page.tsx
│   ├── accessories/
│   │   └── page.tsx
│   ├── careers/
│   │   └── page.tsx
│   ├── finance/
│   │   └── page.tsx
│   ├── insurance/
│   │   └── page.tsx
│   ├── maruti-suzuki-service/
│   │   └── page.tsx
│   ├── driving-school/
│   │   └── page.tsx
│   ├── disclaimer/
│   │   └── page.tsx
│   ├── terms-and-conditions/
│   │   └── page.tsx
│   ├── privacy-policy/
│   │   └── page.tsx
│   ├── sitemap.ts                  # Dynamic sitemap generation
│   └── api/
│       ├── send/
│       │   └── route.ts            # Service/contact form handler (Nodemailer)
│       └── careers/
│           └── route.ts            # Careers apply form handler
├── components/
│   ├── Header.tsx
│   ├── Footer.tsx
│   ├── ServiceForm.tsx             # Reusable schedule service form
│   ├── ContactForm.tsx
│   ├── CarCard.tsx
│   ├── GalleryGrid.tsx
│   └── MapEmbed.tsx
├── public/
│   ├── images/                     # All images from /images/
│   ├── fonts/                      # TR Renfrew.TTF
│   └── sitemap.xml
├── data/
│   ├── cars.json                   # Car models list
│   └── accessories.json            # Accessories list
├── styles/
│   └── globals.css
├── .env.local                      # SMTP credentials
├── next.config.js
└── package.json
```

---

## 13. SEO Notes

- **Domain:** `https://www.mahalaxmimotors.com` and `https://mahalaxmimotors.co.in` (both in use)
- **Canonical URLs:** Currently point to old domain `arenaofgtroadkarnal.com` — update all canonicals to `mahalaxmimotors.co.in` or the new Next.js domain in `next.config.js` metadata.
- **About Us, Disclaimer, T&C, Privacy Policy** have `robots: noindex, nofollow`. Maintain this in Next.js via `export const metadata` in each page file.
- **Homepage and service pages** are indexable — ensure `robots: index, follow` (default).
- In Next.js App Router, use `generateMetadata()` per page for dynamic SEO.

---

## 14. Brand Colors

| Color | Hex | Used For |
|---|---|---|
| Maruti Red | `#c3161c` | Brand accent, CTAs, loader text |
| Deep Navy | `#0a1f4e` | Header, sidebar backgrounds |
| Footer Blue | `rgb(45, 52, 148)` = `#2d3494` | Footer background |
| Light Blue | `#1b2f6d` | Secondary accent |
| White | `#ffffff` | Backgrounds, text on dark |
| Light Gray | `#f8f9fa` | Section backgrounds |
| Dark Text | `#1a2340` | Body text |

---

## 15. Key Notes for Next.js Conversion

1. **Routing:** All `.html` file routes map 1:1 to Next.js App Router directories (see section 12). Use `next.config.js` redirects to maintain backward compatibility for old `.html` URLs.

2. **Forms:** All forms currently submit to `send.php` via AJAX. Replace with `fetch('/api/send', { method: 'POST', body: formData })` pointing to Next.js Route Handlers. Use Nodemailer for email delivery.

3. **Images:** Move from `/images/` to `/public/images/`. Use `next/image` for all local images. Keep CDN images (JD Magic Box, Maruti) as external `src` in `next/image` with `remotePatterns` in `next.config.js`.

4. **Video:** `/images/mahalaxmimotors-building-video.mp4` is used with `playbackRate = 6`. Place in `/public/images/` and reference via `<video>` tag directly (not `next/image`).

5. **CSS:** Replace Maruti CDN stylesheets with Tailwind CSS. Brand colors defined in `tailwind.config.js` under `theme.extend.colors`.

6. **Font:** Load `TR Renfrew.TTF` via `next/font/local`:
   ```ts
   import localFont from 'next/font/local'
   const trRenfrew = localFont({ src: '../public/fonts/TR Renfrew.TTF' })
   ```

7. **Google Maps:** Use the embed URL directly in an `<iframe>`. No Google Maps JS API key needed.

8. **PHP to Node:** `send.php` uses PHPMailer. Rewrite as a Next.js API Route with Nodemailer. The email recipient is `contact@mahalaxmimotors.co.in`.

9. **Fancybox Gallery:** Replace jQuery Fancybox with a React lightbox library (e.g., `yet-another-react-lightbox` or `react-photo-album`).

10. **Bootstrap:** The site uses Bootstrap 5.3.2. In Next.js you can keep Bootstrap or switch to Tailwind. If keeping Bootstrap, install `bootstrap` npm package and import in `globals.css`.

11. **Sitemap:** Generate dynamically in `app/sitemap.ts` using `MetadataRoute.Sitemap`. Update domain from `mahalaxmimotors.com` to the final production domain.

12. **Redirects:** Add to `next.config.js`:
    ```js
    async redirects() {
      return [
        { source: '/about-us.html', destination: '/about-us', permanent: true },
        { source: '/contact-us.html', destination: '/contact-us', permanent: true },
        { source: '/accessories.html', destination: '/accessories', permanent: true },
        { source: '/careers.html', destination: '/careers', permanent: true },
        { source: '/finance.html', destination: '/finance', permanent: true },
        { source: '/insurance.html', destination: '/insurance', permanent: true },
        { source: '/maruti-suzuki-service.html', destination: '/maruti-suzuki-service', permanent: true },
        { source: '/driving-school.html', destination: '/driving-school', permanent: true },
        { source: '/disclaimer.html', destination: '/disclaimer', permanent: true },
        { source: '/terms-and-conditions.html', destination: '/terms-and-conditions', permanent: true },
        { source: '/privacy-policy.html', destination: '/privacy-policy', permanent: true },
      ]
    }
    ```

13. **`next/image` remotePatterns:** Add to `next.config.js`:
    ```js
    images: {
      remotePatterns: [
        { hostname: 'images.jdmagicbox.com' },
        { hostname: 'content.jdmagicbox.com' },
        { hostname: 'AZ-CI-AFDE-HYPL-PROD-04-feapdxcug4g4ayc0.a02.azurefd.net' },
        { hostname: 'mahalaxmimotors.co.in' },
      ]
    }
    ```
