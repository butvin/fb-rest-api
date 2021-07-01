Apps types: (5)
-------------------------------------------------------------------------------
I. потребительское приложение, (например вход через Facebook.)
            email
            instagram_graph_user_media
            instagram_graph_user_profile
            public_profile
            user_age_range
            user_birthday
            user_friends
            user_gender
            user_hometown
            user_likes
            user_link
            user_location
            user_photos
            user_posts
            user_videos

 -------------------------------------------------------------------------------
II. приложение

Бизнес-приложения предназначены для компаний и организаций.
Oни позволяют управлять страницами, группами, мероприятиями, объявлениями и связанными с ними объектами.

    Доступные продукты
    Реклама приложения
    События в приложении
    App Links
    Аналитика
    Audience Network
    Вход через Facebook
    Пиксель Facebook
    API Groups
    API Graph для Instagram (не включает API Instagram Basic Display)
    Моментальные статьи
    Вакансии
    API Pages
    API Marketing
    Messenger
    Публикации
    ThreatExchange
    Веб-платежи
    Webhooks
 -------------------------------------------------------------------------------
    Реклама приложения
    События в приложении
    App Links
    Аналитика
    Audience Network
    Вход через Facebook
    Пиксель Facebook
    API Groups
    API Graph для Instagram (не включает API Instagram Basic Display)
    Моментальные статьи
    Вакансии
    API Pages
    API Marketing
    Messenger
    Публикации
    ThreatExchange
    Веб-платежи
    Webhooks

Доступные разрешения
-------------------------------------------------------------------------------
            ads_management
            ads_read
            attribution_read
            business_management
            catalog_management
            groups_access_member_info
            email
            instagram_basic
            instagram_manage_comments
            instagram_manage_insights
            leads_retrieval
            pages_manage_ads
            pages_manage_cta
            pages_manage_engagement
            pages_manage_instant_articles
            pages_manage_metadata
            pages_manage_posts
            pages_messaging
            pages_read_engagement
            pages_read_user_content
            pages_show_list
            pages_user_gender
            pages_user_locale
            pages_user_timezone
            public_profile
            publish_to_groups
            publish_video
            read_insights
            whatsapp_business_management
 -------------------------------------------------------------------------------
    Доступные функции
    Стандартный уровень доступа для управления рекламой
    Доступ к профилям пользователей, взаимодействующих с объектами компании
    API Groups
    Доступ к общедоступному контенту Instagram
    API Live Video
    Упоминания Страниц
    Доступ к общедоступному контенту Страницы
    Доступ к общедоступным метаданным Страницы
 -------------------------------------------------------------------------------
Для бизнес-приложений не предусмотрены режимы работы:
    вместо этого применяются уровни доступа, от которых зависит,
    кто именно может предоставлять приложениям разрешения
    и для кого будут доступны функции.

    (Режим разработки | Рабочий режим | Переключение режимов)
     ---------------------------------------------------------
    https://developers.facebook.com/docs/development/build-and-test/app-modes
     ----------------------------------------------------------

3   - моментальная игра,
    - игровые сервисы;
    - Workplace (либо тип может быть не указан)

-------------------------------------------------------------------------------

Access Tokens types (4 types):
  1. User Access Token >>> Он требуется всегда, когда приложение вызывает API Маркеры доступа пользователей

    Пользовательские (User Access Toke) бывают двух видов:
        - краткосрочные 1-2ч
        - долгосрочные ~60д
 -------------------------------------------------------------------------------
  2. App Access Token, >>> Для получения маркера доступа приложения нужно отправить вызов с сервера на сервер.
	  -------------------------------------------------------------------------------
  3. Page Access Token, >>> получения через API Graph.
	  -------------------------------------------------------------------------------
  4. Client Token.
        - Long-Lived Tokens
        - Debugging & Errors
        - Session Info Access Tokens
        - Portability
-------------------------------------------------------------------------------
-------------------------------------------------------------------------------

https://developers.facebook.com/docs/marketing-api/overview/authorization#limits

-------------------------------------------------------------------------------
-------------------------------------------------------------------------------

Если вам предоставят расширенный доступ, то для поддержания этого статуса приложение должно будет:

    1 - по итогам проверки получить стандартный доступ к управлению рекламой;
    2 - успешно выполнить не менее 1 500 вызовов API Marketing за последние 30 дней;
    3 - иметь менее 10 % вызовов API Marketing, завершившихся ошибкой, за последние 30 дней.

Разрешения, которые вам нужно запросить, зависят от того,
с каким API вы хотите работать:
-------------------------------------------------------------------------------
https://developers.facebook.com/docs/development/create-an-app/app-dashboard/app-types#available-permissions
-------------------------------------------------------------------------------