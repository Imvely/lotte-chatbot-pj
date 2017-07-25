# LOHB's chatbot PJ

---

## Codeigniter 소스 설명
- Model : **lohbs_chatbot/application/models**
- View : **lohbs_chatbot/application/views**
- Controller : **lohbs_chatbot/application/controllers**
- JS, CSS, Font, img 등등 : **lohbs_chatbot/application/public** 각각의 폴더에
- Config : **lohbs_chatbot/application/config**
- DB정보 : **lohbs_chatbot/application/config/database.php**





## .htaccess

- **lohbs_chatbot/application/public** 이곳에 **.htaccess** 만들어서 아래와 같은 코드 넣는다.
- *경로 설정때문에 필수!!*

    ```
    RewriteEngine on
    RewriteCond %{REQUEST_URI} !^/include/js/(.*)$
    RewriteCond $1 !^(index\.php|css|img|images|ajax|fonts|sound|data|channels|_down|js|_uploads|robots\.txt)
    RewriteCond %{REQUEST_URI} !^/include/(.*)$
    RewriteRule ^(.*)$ /index.php/$1 [L] 
    ```





## AMP 프로그램 사용시

- 경로는 **lohbs_chatbot/application/public** 로 잡아줌






## Chatbot 경로

- /main/chat   *(여기 소스에는 사용자 key 넣지 않아서 챗봇 실행 안됨)*


## 일정

| 7/25 | 7/26 | 7/27 |
| :--------: | :--------: | :--------: |
| codeigniter 소스에 chatbot 구축 완료 | mongodb 구축 완료 | 소스에 mongo, d3 붙여 테스트 |


| 7/28 | 7/31 | 8/1 | 8/2 |
| :--------: | :--------: | :--------: | :--------: |
| lex 시나리오 및 포토샵 샘플 이미지 만들어 s3 저장 | lex 시나리오 완료 | ppt | 마무리 |


---

