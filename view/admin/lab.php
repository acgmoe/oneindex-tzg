<?php view::layout('layout')?>
<?php view::begin('content');?>
<div class="mdui-container-fluid">

<div class="mdui-typo">
	<h1> <a href="?/admin/lab" target="_blank">实验室</a>
</div>
<div class="mdui-textfield">
    <h3>这里是我们正在开发的功能，你可以尝试使用它们，并在出现问题时提交Issues。<h3>
    <h4>请注意，如果使用这些功能出现问题，我们将不承担任何责任。</h4>
</div>

<div class="mdui-container">
  <div class="mdui-row">
    <div class="mdui-col-sm-6 mdui-col-md-4">
      <div class="mdui-card">
        <div class="mdui-card-media">
            <img src="//mdui-aliyun.cdn.w3cbus.com/docs/assets/docs/img/card.jpg"/>
            <div class="mdui-card-media-covered mdui-card-media-covered-top">
                <div class="mdui-card-primary">
                    <div class="mdui-card-primary-title">建议搜索引擎不索引本站点</div>
                    <div class="mdui-card-primary-subtitle">并不是所有搜索引擎都会遵守这类请求。请将下载的文件上传至网站根目录即可生效。</div>
                </div>
            </div>
        </div>
        <div class="mdui-card-actions">
            <a href="https://oneindex.tzihangu.co/robots.txt"><button class="mdui-btn mdui-ripple">开启</button></a>
            <button class="mdui-btn mdui-ripple" mdui-dialog="{target: '#howtoclosed'}">如何关闭此功能？</button>
        </div>
        <div class="mdui-dialog" id="howtoclosed">
    		<div class="mdui-dialog-content">请前往网站根目录，删除robots.txt并重启Web Service。</div>
   		 	<div class="mdui-dialog-actions">
      		<button class="mdui-btn mdui-ripple" mdui-dialog-close>关闭</button>
   	 	</div>
      </div>
    </div>
  </div>
</div>