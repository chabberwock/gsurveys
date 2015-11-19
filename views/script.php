<!-- Google Survey Script -->
<script type='text/javascript' src='http://survey.g.doubleclick.net/async_survey?site=<?= $this->config['GCSACCOUNTID'] ?>'></script>

<script type="text/javascript">
(function() {
  var ARTICLE_URL = window.location.href;
  var CONTENT_ID = '<?= $this->config['CONTENT_ID'] ?>';
  document.write(
    '<scr'+'ipt '+
    'src="//survey.g.doubleclick.net/survey?site=<?= $this->config['GCSACCOUNTID'] ?>'+
    '&amp;url='+encodeURIComponent(ARTICLE_URL)+
    (CONTENT_ID ? '&amp;cid='+encodeURIComponent(CONTENT_ID) : '')+
    '&amp;random='+(new Date).getTime()+
    '" type="text/javascript">'+'\x3C/scr'+'ipt>');
})();
</script>
