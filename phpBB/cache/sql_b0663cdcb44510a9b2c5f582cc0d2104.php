<?php exit; ?>
1385840816
SELECT s.style_id, t.template_storedb, t.template_path, t.template_id, t.bbcode_bitfield, t.template_inherits_id, t.template_inherit_path, c.theme_path, c.theme_name, c.theme_storedb, c.theme_id, i.imageset_path, i.imageset_id, i.imageset_name FROM phpbb_styles s, phpbb_styles_template t, phpbb_styles_theme c, phpbb_styles_imageset i WHERE s.style_id = 0 AND t.template_id = s.template_id AND c.theme_id = s.theme_id AND i.imageset_id = s.imageset_id
6
a:0:{}