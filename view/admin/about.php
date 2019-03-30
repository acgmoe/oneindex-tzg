<?php view::layout('layout')?>
<?php view::begin('content');?>
<div class="mdui-container-fluid">

<div class="mdui-typo">
	<h1> <a href="?/admin/about" target="_blank">关于</a>
</div>
<div class="mdui-textfield">
    <h3>OneIndex By TheZihanGu   <small>一个OneIndex改进版，保留原版的简洁。</small></h3>
    <h4>GitHub：<a href="https://github.com/TheZihanGu/oneindex-tzg">TheZihanGu/oneindex-tzg</a></h4>
</div>
<div class="mdui-textfield">
    <h2>重置OneIndex</h2>
    <h4>此操作允许您重新配置OneIndex，重置后当前配置将被删除，请知晓。</h4>
	<div class="mdui-container">
    <button class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-ripple" mdui-dialog="{target: '#clear'}">open</button>

  <div class="mdui-dialog" id="clear">
    <div class="mdui-dialog-title">确定重置吗？</div>
    <div class="mdui-dialog-content">你将永远丢失当前的配置！</div>
    <div class="mdui-dialog-actions">
        <button class="mdui-btn mdui-ripple" mdui-dialog-close>算了吧</button>
        <a href="/view/admin/reset.php">
            <button class="mdui-btn mdui-ripple">确定</button>
        </a>
    </div>
  </div>
</div>
<?php view::end('content');?>