<?php
curl 'https://oapi.dingtalk.com/robot/send?access_token=6b29ffe2d5f19b6f9a081010a5b0475ffffa28091c30d97368dfebce199d06e1' \
   -H 'Content-Type: application/json' \
   -d '
  {"msgtype": "text", 
    "text": {
        "content": "我就是我, 是不一样的烟火"
     }
  }'
?>
