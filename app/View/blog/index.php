<?php if(isset($this->data['user'])): ?>
    Блог польвателя: <?=$this->data['user']->name ?> <br>
    ID польвателя: <?=$this->data['user']->id ?> <br>

    <?php if((!empty($_SESSION['id']) && $_GET['id'] == $_SESSION['id']) ): ?>
        <form class="form" method="post">
            <textarea name="message" id="message" cols="30" rows="10" required></textarea><br>
            <input type="submit" value="Отправить сообщение">
        </form>
    <?php endif; ?>

    <section class="messages">
        <h1>All messages: </h1>
        <div class="messages__container">
            <div class="messages__item">
                <div class="messages__item-info">
                    <span>ID: <?=$this->data['user']->id ?></span>
                    <span>2017-08-27</span>
                </div>
                <p class="messages__item-content">
                    Message of userMessage of userMessage of userMessage of userMessage of userMessage of userMessage of userMessage of userMessage of userMessage of userMessage of user
                </p>
            </div>
        </div>
    </section>
<?php else: ?>
	Такого пользователя не существует: <a href="/blog">Перейти в свой блог</a>
<?php endif; ?>

<style>
    <?php include __DIR__ . '/style.css'; ?>
</style>
