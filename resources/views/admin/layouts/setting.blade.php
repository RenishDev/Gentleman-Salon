<style>
          /* Default Theme (Light) */
          :root {
            --color-primary: #e9ccab;
            --color-sec: #d1ad89;
            --color-white: #ffffff;
            --color-black: #000000;
            --color-dark: #000000;
            --color-dark-2: #936b3d;
            --color-dark-3: #9f7648;
            --color-grey: #999999;
            --color-grey-light: #DFDFDF;
            --color-grey-dark: #616161;
            --gradient: linear-gradient(135deg, #e9ccab 0%, #d1ad89 100%);
        }

        .theme-1 {
            --color-primary: #e9ccab;
            --color-sec: #d1ad89;
            --gradient: linear-gradient(135deg, #e9ccab 0%, #d1ad89 100%);
        }

        /* Theme 2 */
        .theme-2 {
            --color-primary: #a6dace;
            --color-sec: #8fbca3;
            --gradient: linear-gradient(135deg, #a6dace 0%, #8fbca3 100%);
        }

        /* Theme 3 */
        .theme-3 {
            --color-primary: #FFA28D;
            --color-sec: #f0856b;
            --gradient: linear-gradient(135deg, #FFA28D 0%, #f0856b 100%);
        }

        /* Theme 4 */
        .theme-4 {
            --color-primary: #ffafcc;
            --color-sec: #e37ea5;
            --gradient: linear-gradient(135deg, #ffafcc 0%, #e37ea5 100%);
        }

        /* Theme 5 */
        .theme-5 {
            --color-primary: #cda0d8;
            --color-sec: #966dc8;
            --gradient: linear-gradient(135deg, #cda0d8 0%, #966dc8 100%);
        }



        /* Button to Open Theme Switcher */
        .settings-btn {
            cursor: pointer;
            background-color: var(--color-sec);
            /* Use the secondary theme color */
            border: none;
            color: var(--color-white);
            font-size: 1.5rem;
            position: fixed;
            bottom: 20px;
            /* Position 20px from the bottom */
            right: 20px;
            /* Position 20px from the right */
            z-index: 1001;
            /* Ensure it is above other elements */
            border-radius: 50%;
            /* Make the button circular */
            padding: 10px;
            transition: background-color 0.3s ease;
            /* Smooth transition */
        }

        .settings-btn:hover {
            background-color: var(--color-primary);
            /* On hover, use the primary theme color */
        }

        /* Theme Switcher */
        .theme-switcher {
            position: fixed;
            bottom: 80px;
            right: 0;
            background-color: var(--color-white);
            padding: 10px;
            border-radius: 10px 0 0 10px;
            box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1);
            display: none;
        }

        .theme-switcher ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 10px;
            /* Spacing between color boxes */
        }

        .theme-switcher li {
            cursor: pointer;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            transition: transform 0.3s ease, border 0.3s ease;
        }

        .theme-switcher li:hover {
            transform: scale(1.2);
            border: 2px solid var(--color-white);
            /* Highlight on hover */
        }

</style>


<script>
    const settingsBtn = document.getElementById('settingsBtn');
    const themeSwitcher = document.getElementById('themeSwitcher');
    const themeOptions = document.querySelectorAll('.theme-option');
    // Show theme switcher panel
    settingsBtn.addEventListener('click', () => {
        themeSwitcher.style.display = themeSwitcher.style.display === 'block' ? 'none' : 'block';
    });
    // Change theme
    themeOptions.forEach(option => {
        option.addEventListener('click', (e) => {
            const selectedTheme = e.target.getAttribute('data-theme');
            document.body.classList.remove(...document.body.classList);
            document.body.classList.add(selectedTheme);
            themeSwitcher.style.display = 'none'; // Hide theme switcher after selection
        });
    });
    // Mobile menu toggle
    const menuToggle = document.getElementById('menuToggle');
    const sidebar = document.getElementById('sidebar');
    menuToggle.addEventListener('click', () => {
        sidebar.classList.toggle('active');
    });
</script>