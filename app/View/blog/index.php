<?php if(isset($this->data['user'])): ?>
    Блог польвателя: <?=$this->data['user']->name ?> <br>
    ID польвателя: <?=$this->data['user']->id ?> <br>

    <?php if( $this->data['admin'] ): ?>
        <form class="form" method="post">
            <textarea name="message" id="message" cols="30" rows="10" required></textarea><br>
            <input type="submit" value="Отправить сообщение">
        </form>
    <?php endif; ?>

    <section class="messages">
        <h1>All messages: </h1>
        <div class="messages__container">
            <?php foreach ($this->data['messages'] as $message): ?>
                <div class="messages__item">
                    <div class="messages__item-info">
                        <span>ID: <?=$this->data['user']->id ?></span>
                        <span><?=$message['date'] ?></span>
                    </div>
                    <p class="messages__item-content">
                      <?=$message['message'] ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php else: ?>
	Такого пользователя не существует: <a href="/blog">Перейти в свой блог</a>
<?php endif; ?>

<style>
    <?php include __DIR__ . '/style.css'; ?>
</style>
