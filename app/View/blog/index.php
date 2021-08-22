<?php if(isset($this->data['user'])): ?>
    Username: <?=$this->data['user']->name ?> <br>
    User ID: <?=$this->data['user']->id ?> <br>

    <?php if( $this->data['admin'] ): ?>
        <form class="form" method="post">
            <textarea name="message" id="message" cols="30" rows="10" required></textarea><br>
            <input type="submit" value="Send message">
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

<!--    <aside class="side-menu">-->
<!--        <h2>Other blogs</h2>-->
<!---->
<!--        <ul>-->
<!--            <li>-->
<!--                <a href="#">User 1</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="#">User 2</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="#">User 3</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="#">User 4</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="#">User 5</a>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </aside>-->
<?php else: ?>
    This user doesn't exist: <a href="/blog">Go to your blog</a>
<?php endif; ?>

<style>
    <?php include __DIR__ . '/style.css'; ?>
</style>
