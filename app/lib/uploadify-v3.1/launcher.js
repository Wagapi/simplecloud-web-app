$(function() {
    $('#plup').uploadify({
        'swf'      : '/wgp/modules/uploadify-v3.1/uploadify.swf',
        'uploader' : 'upload2.php',
		'fileObjName' : 'files[]',
		'fileSizeLimit' : '50MB'
        // Put your options here
    });
});

