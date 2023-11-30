<button class="btn fixed-bottom border border-light rounded-circle bg-primary-subtle" id="button-help" style="left: 95%; top:85%; width: 3rem; height: 3rem; font-size: x-large;">
    <i class="bx bx-phone" id="icon-help"></i>
</button>

<style>
    .wrapper {
        position: fixed;
        right: 2rem;
        bottom: 8rem;
        width: 300px;
        background-color: #fff;
        border-radius: 5px;
        transition: all 0.4s
    }

    .wrapper-hide {
        opacity: 0;
    }

    .wrapper-show {
        opacity: 1;
    }
    .wrapper-hide {
        opacity: 0;
    }

    .header {
        padding: 13px;
        border-radius: 5px 5px 0px 0px;
        margin-bottom: 10px;
        color: #fff
    }

    .chat-form {
        padding: 15px
    }

    .chat-form input,
    textarea,
    button {
        margin-bottom: 10px
    }

    .chat-form textarea {
        resize: none
    }
</style> 

<div class="wrapper wrapper-hide border border-light shadow"> 
    <div class="header bg-primary-subtle text-dark"> 
        <h6 style="font-weight: 900">Butuh Bantuan?</h6>
    </div>
    <div class="text-center p-2"> 
        <span>Kami siap membantu anda 24 Jam</span>
    </div>
    <div class="chat-form d-flex flex-column">
        <button class="btn mx-2 btn-outline-dark btn-lg">
            <i class="bx bxs-phone"></i> 0804-1-808-888
        </button>

        <button class="btn mx-2 btn-outline-dark btn-lg">
            <i class="bx bxs-phone"></i> (021)-39708800
        </button>

        <button class="btn mx-2 btn-outline-dark btn-lg">
            <i class="bx bxl-whatsapp"></i> +62-81-7437-111
        </button>

        <button class="btn mx-2 btn-outline-dark btn-lg">
            <i class="bx bxs-envelope"></i> info@qwords.com
        </button>
    </div>
</div>