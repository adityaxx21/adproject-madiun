<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        font-family: Roboto, "Helvetica Neue", Arial, sans-serif;
    }

    form {
        display: flex;
        justify-content: center;
    }



    .special {
        margin-top: 2rem;
        font-size: 2rem;
        opacity: 1;
        visibility: visible;
        transition: all 0.3s ease;
    }
</style>
<div>
    <form>
        <input class="liba" type="text" maxlength=1 />
        <input class="liba" type="password" maxlength=1 />
        <input class="liba" type="password" maxlength=1 />
        <input class="liba" type="password" maxlength=1 />
    </form>
    <form>
        <input class="liba1" type="text" maxlength=10 />

    </form>
</div>
<script>
    const inp = document.getElementsByClassName("liba");
    const inputs = document.querySelectorAll(inp);
    const codeBlock = document.getElementById("code-block");
    const code = document.getElementById("code");
    const form = document.querySelector("form");

    inp.forEach((input, key) => {
        if (key !== 0) {
            input.addEventListener("click", function() {
                inputs[0].focus();
            });
        }
        input.addEventListener("keyup", function() {
            if (input.value) {
                if (key === 3) {
                    // Last one tadaa
                    const userCode = [...inp].map((input) => input.value).join("");
                    codeBlock.classList.remove("hidden");
                    code.innerText = userCode;
                } else {
                    inp[key + 1].focus();
                }
            }
        });
    });

</script>