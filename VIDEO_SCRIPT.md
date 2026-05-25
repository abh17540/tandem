# Tandem — Video Walkthrough (Week 2)

A 3–5 minute screen recording walking through the current MVP. Below: how to run the app, how to record, and a word-for-word script.

---

## 1. Run the app locally

PHP is installed (8.5). From the project folder:

```bash
cd "~/Library/Mobile Documents/com~apple~CloudDocs/Manav Das/KNOWLEDGE BASE/projects/tandem"
php -S localhost:8000
```

Then open **http://localhost:8000** in your browser. Leave the terminal running while you record. Press `Ctrl+C` in the terminal to stop the server when done.

Pages:
- `/index.php` — Home / landing
- `/register.php` — Create account (form)
- `/login.php` — Log in (form)
- `/dashboard.php` — Demo dashboard

---

## 2. Record the screen (macOS)

**Easiest — built-in:**
1. Press `Cmd + Shift + 5`.
2. Choose **Record Selected Portion** (drag a box around just the browser window) or **Record Entire Screen**.
3. Click **Options** → set **Microphone** to your mic (so your voice is captured) → set save location to Desktop.
4. Click **Record**. A timer starts.
5. Talk through the script below.
6. Stop: click the ■ stop button in the menu bar (or `Cmd + Shift + 5` → Stop). The `.mov` saves to your Desktop.

**Tips:**
- Make the browser window large and zoom the page to ~110–125% so text is readable in the recording.
- Close other tabs / hide your bookmarks bar for a clean look.
- Do one practice run first — the script is timed for a calm, unhurried pace.
- 3–5 min is the target; the script lands around 3.5 min spoken normally.
- If you fumble, just keep going — or stop and re-record, it's quick.

---

## 3. Script (≈3.5 min)

Speak naturally — this is a guide, not a teleprompter. Stage directions in *(italics)*.

### Intro — Home page (~0:00–0:45)
*(Start on http://localhost:8000, the Home page visible.)*

> "Hi, I'm Abhi, and this is **Tandem** — a social networking web application I'm building for Web Programming II. Tandem is designed for adults with ADHD. Instead of relying on willpower, it uses social accountability to help people start tasks and stay focused.
>
> This is the landing page. It introduces the two core ideas behind Tandem: **accountability pods**, which are small groups working toward similar goals, and **body-doubling rooms**, where you focus alongside someone else in real time. There's also a gentle streak system that doesn't punish you for missing a day.
>
> From here a new visitor has two clear paths — **Create an account** or **Log in**."

*(Point cursor at the two buttons.)*

### Registration page (~0:45–1:45)
*(Click "Create an account" → register.php.)*

> "Let's start by creating an account. This is the registration page. It has a simple form — full name, email, password, and a password confirmation.
>
> On the back end this form is handled with **PHP**. When I submit, PHP reads the posted values and validates them — it checks that all fields are filled in, and that the two passwords match."

*(First, demonstrate validation: type a name/email, enter two DIFFERENT passwords, click Submit.)*

> "If the passwords don't match, the server returns an error message — like you see here."

*(Now fix it: enter matching passwords, click Submit.)*

> "And when everything's valid, PHP confirms the account was created and tells the user they can log in. For this milestone the validation logic is in place; connecting it to a MySQL database is the next step."

### Login page (~1:45–2:30)
*(Click "Log in" in the nav → login.php.)*

> "Next is the login page — email and password. This is also handled by PHP on submit."

*(Type an email and password, click Submit.)*

> "On a successful submit the server greets the user back. Right now this is a demo response; once the database is wired in, it'll check credentials against real accounts and start a session."

### Dashboard (~2:30–3:20)
*(Click "Dashboard" in the nav → dashboard.php.)*

> "Finally, this is the dashboard — what a logged-in member sees. At the top is their **gentle streak**: four days, and notice it's encouraging, not threatening.
>
> Below that are **Your Pods** — the accountability groups they've joined, like the Morning Focus Pod and the Deep Work Crew, each showing a quick description and how many members are in it.
>
> And here are the **Body-Doubling Rooms** — live focus rooms like The Library and Coffee & Code, showing how many people are focusing right now. The idea is you drop into one and work alongside others.
>
> Right now this dashboard uses placeholder content to show the layout and structure I'm building toward."

### Wrap-up (~3:20–3:40)
*(Optionally click back to Home, or stay on dashboard.)*

> "So that's the current state of Tandem: a multi-page PHP app with working navigation, form handling and validation on the registration and login pages, and a dashboard layout for the core social features. Next steps are connecting it to a MySQL database for real accounts, and building out the pods and body-doubling rooms. Thanks for watching."

*(Stop recording.)*

---

## 4. Quick checklist before you hit record
- [ ] `php -S localhost:8000` running, page loads at http://localhost:8000
- [ ] Browser window large, page zoomed for readability, extra tabs closed
- [ ] Mic selected in the `Cmd+Shift+5` Options menu
- [ ] One practice pass done
- [ ] Recording 3–5 min; saved `.mov` on Desktop ready to submit
