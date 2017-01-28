<?php
$this->assign('title', 'SERP | Rumah123.com');

echo $this->LayoutPartsHlp->createMetaDataHeader();
echo $this->LayoutPartsHlp->createLayoutHeader();
?>
    <div id="container">
        <div id="header">
            <h1>Error Custom Bosss</h1>
        </div>
        <div id="content">
            <?= $this->Flash->render() ?>

            <?= $this->fetch('content') ?>
        </div>
        <div id="footer">
            <?= $this->Html->link(__('Back'), 'javascript:history.back()') ?>
        </div>
    </div>

<?php
echo $this->LayoutPartsHlp->createLayoutFooter();
?>
