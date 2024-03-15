<link rel="stylesheet" href="./styles/header.css">

<header>
        <h2>PHILIPPINE MALABON CULTURAL INSTITUTE</h2>

        <div class="set">
            <button>PROFILE</button>
            <button onclick="myFunction()">LOG OUT</button>
        </div>



        <script>
            function myFunction() {
                let text = "ARE YOU SURE YOU WANT TO LOG OUT?";
                if (confirm(text) == true) {
                    // text = "You pressed OK!";
                } else {
                    // text = "You canceled!";
                }

            }
        </script>
    </header>