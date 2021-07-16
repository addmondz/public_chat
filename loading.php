<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
    @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    .onload_loading {
        min-height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        /* background: #dde6f0; */
        background: white;
        position: absolute;
        z-index: 132123132;
    }

    .box {
        position: relative;
        height: 700px;
        width: 500px;
        /* background: #222; */
        border-radius: 5px;
        margin: 30px;
    }

    .box .shadow {
        position: absolute;
        height: 100%;
        width: 50%;
        /* background: rgba(0, 0, 0, 0.3); */
    }

    .box svg {
        position: absolute;
        height: 320px;
        width: 320px;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%) rotate(-90deg);
    }

    .box svg circle.color1 {
        fill: transparent;
        stroke: #333;
        stroke-width: 25;
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000;
        stroke-linecap: round;
        /* time = counter * 1.35 */
        animation: stroke 6.75s steps(500) forwards;
        z-index: 10;
    }

    .box svg circle.color2 {
        fill: transparent;
        stroke: #dde6f0;
        stroke-width: 25;
        stroke-dasharray: 1000;
        stroke-linecap: round;
        stroke-dashoffset: 0;
        box-shadow: inset 0 1px 0 rgb(0 0 0 / 20%);
    }

    .box .counter {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 50px;
        color: #fff;
        text-align: center;
        overflow: hidden;
    }

    .box .counter span {
        font-size: 28px;
        line-height: 50px;
        font-weight: bold;
    }

    .box .counter span:after {
        content: "0%\A 1%\A 2%\A 3%\A 4%\A 5%\A 6%\A 7%\A 8%\A 9%\A 10\A 11%\A 12%\A 13%\A 14%\A 15%\A 16%\A 17%\A 18%\A 19%\A 20%\A 21%\A 22%\A 23%\A 24%\A 25%\A 26%\A 27%\A 28%\A 29%\A 30%\A 31%\A 32%\A 33%\A 34%\A 35%\A 36%\A 37%\A 38%\A 39%\A 40%\A 41%\A 42%\A 43%\A 44%\A 45%\A 46%\A 47%\A 48%\A 49%\A 50%\A 51%\A 52%\A 53%\A 54%\A 55%\A 56%\A 57%\A 58%\A 59%\A 60%\A 61%\A 62%\A 63%\A 64%\A 65%\A 66%\A 67%\A 68%\A 69%\A 70%\A 71%\A 72%\A 73%\A 74%\A 75%\A 76%\A 77%\A 78%\A 79%\A 80%\A 81%\A 82%\A 83%\A 84%\A 85%\A 86%\A 87%\A 88%\A 89%\A 90%\A 91%\A 92%\A 93%\A 94%\A 95%\A 96%\A 97%\A 98%\A 99%\A 100%";
        position: absolute;
        white-space: pre;
        left: 50%;
        transform: translateX(-50%);
        animation: animate 5s steps(100) forwards;
    }

    h2.loading_text {
        color: #333;
        /* #333 */
        position: absolute;
        width: 100%;
        text-align: center;
        bottom: 15%;
        letter-spacing: 1px;
        font-size: 40px;
    }

    @keyframes animate {
        0% {
            top: 0%;
        }

        100% {
            top: -5000px;
        }
    }

    @keyframes stroke {
        100% {
            stroke-dashoffset: 0;
        }
    }

    .box svg .color1,
    .box .counter .color1 {
        stroke: #333;
        color: #333;
        font-size: 48px;
        font-family: "Poppins", sans-serif;
    }

    span.loading_span::before {
        content: "";
        animation: animate_span infinite 2s;
    }

    @keyframes animate_span {

        0% {
            content: ". ";
        }

        50% {
            content: ". . ";
        }

        75% {
            content: ". . . ";
        }

        100% {
            content: ". . . . ";
        }
    }
</style>

<div class="onload_loading">
    <div class="box">
        <svg>
            <circle cx="160" cy="160" r="120" class="color2"></circle>
            <circle cx="160" cy="160" r="120" class="color1"></circle>
        </svg>
        <div class="counter">
            <span class="color1"></span>
        </div>
        <h2 class="loading_text">LOADING<span class="loading_span"></span></h2>
    </div>
</div>

<script>
    $(function() {
        setTimeout(function() {
            $(".onload_loading").fadeOut();
        }, 5000);
    });
</script>