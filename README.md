# Tetra
A super fun challenge to see how much of a laravel app I could (learn) and build over a weekend.

# How to get up and running
1. Clone the repo
2. install dependencies and compile local assets:
```bash
    npm i && composer install

    npm run dev | prod
```
3. You'll also need a local copy of apache and mysql running.

4. register a user (/register)
5. import `tetra_app-export.sql` into a new database called `tetra_app` or create a new database and run the migrations


## If I had more time, I would have liked to
- revisit all of the Laravel Auth stuff (Jetstream and Livewire) since it's a bit scattered and unorganised at the moment

- Add way more data. It's hard to really demonstrate an application's strengths without it. This includes the introduction of seeders - since you don't really get to see the migrations running

- Focus more on responsive design. It's so important, especially after Google's Mobilegeddon

- Focus more on a11y and usability. Google's DevTool, 'Lighthouse' gave me a pretty good score for both but it's not good enough

- Translation support for our international friends

- Added a Production based environment so I could:
  - Deploy to AWS
  - Attach a load balancer (for fun)
  - Attach an RDS instead of having the db on the same server and also easy backups
  - Hook up Cloudwatch so I can see how much money everything is costing me
  - Buy a witty domain name like "give-josh-a-job.com" and use Route 53 to connect it all together

- Containerise the application with Docker so everyone on the team gets the same enviroment. Kiss goodbye to "it works on my machine". But really also speed of deployment. I've heard it plays nice with build tools like Jenkins.

- Add some analytics to the dashboard so users can understand their data better and ultimately make better decisions which saves them money and reduces waste (ideally)

- Make the welcome page a bit bigger and really sell the product a bit more to help build trust for first time users (from website guest/sceptic -> repeat business essentially)

- Add a better user-onboarding experience, since it's not very friendly at the mo'.

- Figure out why the Tidal Times API didn't work then integrate a dynamic solution based on the user's "favourite market"

- Investigate whether or not physical asset management would be beneficial to users. Things like "vessel last inspected", or "condition of ropes" or "how many teabags are on board", the real important stuff.

- Added payment vendor Stripe so I could automatically bill users when they make purchases on the site. (also, their UX is waaay better than PayPal and if you're a start-up you can sometimes get free credit)

- Unit tests - namely PHPUnit and Jest for better confidence in the application. It's much easier to start testing when the application is small.

- Add ESLint and PHPCS to composer.json and my IDE so I can adhere to whatever style guide I like (probably AirBnB and PSR12 for JS and PHP respectively)

- Add some 'delightful' micro-interactions which subtly improve the user's experience. 

- Look into how I could 'gamify' the marketplace

- Maybe add a easter egg/non-offensive hidden joke
