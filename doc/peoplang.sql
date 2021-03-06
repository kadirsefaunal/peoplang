PGDMP     ;    8                 v            peoplang    10.1    10.1 �    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            �           1262    25115    peoplang    DATABASE     �   CREATE DATABASE peoplang WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Turkish_Turkey.1254' LC_CTYPE = 'Turkish_Turkey.1254';
    DROP DATABASE peoplang;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            �           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    3                        3079    12924    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            �           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1259    25116    AboutMe    TABLE     T  CREATE TABLE "AboutMe" (
    "ID" integer NOT NULL,
    "aboutMe" text NOT NULL,
    requests text NOT NULL,
    "languageExcRequests" text NOT NULL,
    "hobbiesInterests" text NOT NULL,
    "favMusics" text NOT NULL,
    "favMovies" text NOT NULL,
    "favTvShows" text NOT NULL,
    "favBooks" text NOT NULL,
    quotes text NOT NULL
);
    DROP TABLE public."AboutMe";
       public         postgres    false    3            �            1259    25122    AboutMe_ID_seq    SEQUENCE     �   CREATE SEQUENCE "AboutMe_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public."AboutMe_ID_seq";
       public       postgres    false    3    196            �           0    0    AboutMe_ID_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE "AboutMe_ID_seq" OWNED BY "AboutMe"."ID";
            public       postgres    false    197            �            1259    25124    Answers    TABLE     �   CREATE TABLE "Answers" (
    "ID" integer NOT NULL,
    "userID" integer,
    "questionID" integer,
    date integer,
    text text
);
    DROP TABLE public."Answers";
       public         postgres    false    3            �            1259    25130    Answers_ID_seq    SEQUENCE     �   CREATE SEQUENCE "Answers_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public."Answers_ID_seq";
       public       postgres    false    3    198            �           0    0    Answers_ID_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE "Answers_ID_seq" OWNED BY "Answers"."ID";
            public       postgres    false    199            �            1259    32789    Blocks    TABLE     b   CREATE TABLE "Blocks" (
    "ID" integer NOT NULL,
    "userID" integer,
    "blockID" integer
);
    DROP TABLE public."Blocks";
       public         postgres    false    3            �            1259    32787    Blocks_ID_seq    SEQUENCE     �   CREATE SEQUENCE "Blocks_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public."Blocks_ID_seq";
       public       postgres    false    3    227            �           0    0    Blocks_ID_seq    SEQUENCE OWNED BY     7   ALTER SEQUENCE "Blocks_ID_seq" OWNED BY "Blocks"."ID";
            public       postgres    false    226            �            1259    25132    Friend    TABLE     c   CREATE TABLE "Friend" (
    "ID" integer NOT NULL,
    "userID" integer,
    "friendID" integer
);
    DROP TABLE public."Friend";
       public         postgres    false    3            �            1259    25140    Friend_ID_seq    SEQUENCE     �   CREATE SEQUENCE "Friend_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public."Friend_ID_seq";
       public       postgres    false    200    3            �           0    0    Friend_ID_seq    SEQUENCE OWNED BY     7   ALTER SEQUENCE "Friend_ID_seq" OWNED BY "Friend"."ID";
            public       postgres    false    201            �            1259    25142    Images    TABLE        CREATE TABLE "Images" (
    "ID" integer NOT NULL,
    "userID" integer,
    url character varying(250),
    avatar boolean
);
    DROP TABLE public."Images";
       public         postgres    false    3            �            1259    25145    Images_ID_seq    SEQUENCE     �   CREATE SEQUENCE "Images_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public."Images_ID_seq";
       public       postgres    false    3    202            �           0    0    Images_ID_seq    SEQUENCE OWNED BY     7   ALTER SEQUENCE "Images_ID_seq" OWNED BY "Images"."ID";
            public       postgres    false    203            �            1259    25147    LanguageLevel    TABLE     �   CREATE TABLE "LanguageLevel" (
    "ID" integer NOT NULL,
    "userID" integer,
    language character varying(50),
    level character varying(25),
    "learningOrSpeaking" boolean
);
 #   DROP TABLE public."LanguageLevel";
       public         postgres    false    3            �            1259    25150    LanguageLevel_ID_seq    SEQUENCE     �   CREATE SEQUENCE "LanguageLevel_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public."LanguageLevel_ID_seq";
       public       postgres    false    204    3            �           0    0    LanguageLevel_ID_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE "LanguageLevel_ID_seq" OWNED BY "LanguageLevel"."ID";
            public       postgres    false    205            �            1259    32797    Notifications    TABLE     �   CREATE TABLE "Notifications" (
    "ID" integer NOT NULL,
    "userID" integer,
    "nUserID" integer,
    notification character varying(150),
    read boolean
);
 #   DROP TABLE public."Notifications";
       public         postgres    false    3            �            1259    32795    Notifications_ID_seq    SEQUENCE     �   CREATE SEQUENCE "Notifications_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public."Notifications_ID_seq";
       public       postgres    false    3    229            �           0    0    Notifications_ID_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE "Notifications_ID_seq" OWNED BY "Notifications"."ID";
            public       postgres    false    228            �            1259    32770    OnlineUsers    TABLE     P   CREATE TABLE "OnlineUsers" (
    "ID" integer NOT NULL,
    "userID" integer
);
 !   DROP TABLE public."OnlineUsers";
       public         postgres    false    3            �            1259    32768    OnlineUsers_ID_seq    SEQUENCE     �   CREATE SEQUENCE "OnlineUsers_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public."OnlineUsers_ID_seq";
       public       postgres    false    223    3            �           0    0    OnlineUsers_ID_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE "OnlineUsers_ID_seq" OWNED BY "OnlineUsers"."ID";
            public       postgres    false    222            �            1259    25152    Post    TABLE        CREATE TABLE "Post" (
    "ID" integer NOT NULL,
    "userID" integer,
    content character varying(280),
    date integer
);
    DROP TABLE public."Post";
       public         postgres    false    3            �            1259    25155    Post_ID_seq    SEQUENCE     ~   CREATE SEQUENCE "Post_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public."Post_ID_seq";
       public       postgres    false    3    206            �           0    0    Post_ID_seq    SEQUENCE OWNED BY     3   ALTER SEQUENCE "Post_ID_seq" OWNED BY "Post"."ID";
            public       postgres    false    207            �            1259    25338    Reports    TABLE     �   CREATE TABLE "Reports" (
    "ID" integer NOT NULL,
    "userID" integer,
    "reportedID" integer,
    content character varying(150),
    date integer
);
    DROP TABLE public."Reports";
       public         postgres    false    3            �            1259    25336    Reports_ID_seq    SEQUENCE     �   CREATE SEQUENCE "Reports_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public."Reports_ID_seq";
       public       postgres    false    221    3            �           0    0    Reports_ID_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE "Reports_ID_seq" OWNED BY "Reports"."ID";
            public       postgres    false    220            �            1259    25157    TranslationRequests    TABLE     �   CREATE TABLE "TranslationRequests" (
    "ID" integer NOT NULL,
    "userID" integer,
    text text,
    "textLanguage" character varying(50),
    "languageToTranslation" character varying(50),
    date integer,
    title character varying(100)
);
 )   DROP TABLE public."TranslationRequests";
       public         postgres    false    3            �            1259    25163    TranslationRequests_ID_seq    SEQUENCE     �   CREATE SEQUENCE "TranslationRequests_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public."TranslationRequests_ID_seq";
       public       postgres    false    208    3            �           0    0    TranslationRequests_ID_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE "TranslationRequests_ID_seq" OWNED BY "TranslationRequests"."ID";
            public       postgres    false    209            �            1259    25165    User    TABLE     �  CREATE TABLE "User" (
    "ID" integer NOT NULL,
    "userName" character varying(50) NOT NULL,
    mail character varying(100) NOT NULL,
    password character varying(128) NOT NULL,
    "registerDate" integer NOT NULL,
    "registerStatus" boolean NOT NULL,
    "lastLogin" integer NOT NULL,
    ip character varying(15) NOT NULL,
    "userStatus" boolean NOT NULL,
    "aboutMeID" integer,
    "userInformationID" integer,
    "webSitesID" integer
);
    DROP TABLE public."User";
       public         postgres    false    3            �            1259    25168    UserInformation    TABLE     	  CREATE TABLE "UserInformation" (
    "ID" integer NOT NULL,
    name character varying(100) NOT NULL,
    country character varying(100) NOT NULL,
    city character varying(200) NOT NULL,
    "birthDate" date NOT NULL,
    gender character varying(25) NOT NULL
);
 %   DROP TABLE public."UserInformation";
       public         postgres    false    3            �            1259    25171    UserInformation_ID_seq    SEQUENCE     �   CREATE SEQUENCE "UserInformation_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public."UserInformation_ID_seq";
       public       postgres    false    3    211            �           0    0    UserInformation_ID_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE "UserInformation_ID_seq" OWNED BY "UserInformation"."ID";
            public       postgres    false    212            �            1259    25173    User_ID_seq    SEQUENCE     ~   CREATE SEQUENCE "User_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public."User_ID_seq";
       public       postgres    false    210    3            �           0    0    User_ID_seq    SEQUENCE OWNED BY     3   ALTER SEQUENCE "User_ID_seq" OWNED BY "User"."ID";
            public       postgres    false    213            �            1259    25175    ViewedProfile    TABLE     �   CREATE TABLE "ViewedProfile" (
    "ID" integer NOT NULL,
    "userID" integer,
    viewer integer,
    "displayDate" integer
);
 #   DROP TABLE public."ViewedProfile";
       public         postgres    false    3            �            1259    25178    ViewedProfile_ID_seq    SEQUENCE     �   CREATE SEQUENCE "ViewedProfile_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public."ViewedProfile_ID_seq";
       public       postgres    false    214    3            �           0    0    ViewedProfile_ID_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE "ViewedProfile_ID_seq" OWNED BY "ViewedProfile"."ID";
            public       postgres    false    215            �            1259    25180    WebSites    TABLE     �   CREATE TABLE "WebSites" (
    "ID" integer NOT NULL,
    facebook character varying(250),
    twitter character varying(250),
    instagram character varying(250),
    skype character varying(250),
    other character varying(1000)
);
    DROP TABLE public."WebSites";
       public         postgres    false    3            �            1259    25186    WebSites_ID_seq    SEQUENCE     �   CREATE SEQUENCE "WebSites_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public."WebSites_ID_seq";
       public       postgres    false    3    216            �           0    0    WebSites_ID_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE "WebSites_ID_seq" OWNED BY "WebSites"."ID";
            public       postgres    false    217            �            1259    25325 	   countries    TABLE     �   CREATE TABLE countries (
    id integer NOT NULL,
    sortname character varying(3),
    name character varying(150),
    phonecode integer
);
    DROP TABLE public.countries;
       public         postgres    false    3            �            1259    32778    messages    TABLE     �   CREATE TABLE messages (
    "ID" integer NOT NULL,
    "userID" integer,
    receiver integer,
    message text,
    date integer,
    "readStatus" boolean
);
    DROP TABLE public.messages;
       public         postgres    false    3            �            1259    32776    messages_ID_seq    SEQUENCE     �   CREATE SEQUENCE "messages_ID_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public."messages_ID_seq";
       public       postgres    false    225    3            �           0    0    messages_ID_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE "messages_ID_seq" OWNED BY messages."ID";
            public       postgres    false    224            �            1259    25330    states    TABLE     i   CREATE TABLE states (
    id integer NOT NULL,
    name character varying(50),
    country_id integer
);
    DROP TABLE public.states;
       public         postgres    false    3            �
           2604    25188 
   AboutMe ID    DEFAULT     `   ALTER TABLE ONLY "AboutMe" ALTER COLUMN "ID" SET DEFAULT nextval('"AboutMe_ID_seq"'::regclass);
 =   ALTER TABLE public."AboutMe" ALTER COLUMN "ID" DROP DEFAULT;
       public       postgres    false    197    196            �
           2604    25189 
   Answers ID    DEFAULT     `   ALTER TABLE ONLY "Answers" ALTER COLUMN "ID" SET DEFAULT nextval('"Answers_ID_seq"'::regclass);
 =   ALTER TABLE public."Answers" ALTER COLUMN "ID" DROP DEFAULT;
       public       postgres    false    199    198            �
           2604    32792 	   Blocks ID    DEFAULT     ^   ALTER TABLE ONLY "Blocks" ALTER COLUMN "ID" SET DEFAULT nextval('"Blocks_ID_seq"'::regclass);
 <   ALTER TABLE public."Blocks" ALTER COLUMN "ID" DROP DEFAULT;
       public       postgres    false    227    226    227            �
           2604    25190 	   Friend ID    DEFAULT     ^   ALTER TABLE ONLY "Friend" ALTER COLUMN "ID" SET DEFAULT nextval('"Friend_ID_seq"'::regclass);
 <   ALTER TABLE public."Friend" ALTER COLUMN "ID" DROP DEFAULT;
       public       postgres    false    201    200            �
           2604    25192 	   Images ID    DEFAULT     ^   ALTER TABLE ONLY "Images" ALTER COLUMN "ID" SET DEFAULT nextval('"Images_ID_seq"'::regclass);
 <   ALTER TABLE public."Images" ALTER COLUMN "ID" DROP DEFAULT;
       public       postgres    false    203    202            �
           2604    25193    LanguageLevel ID    DEFAULT     l   ALTER TABLE ONLY "LanguageLevel" ALTER COLUMN "ID" SET DEFAULT nextval('"LanguageLevel_ID_seq"'::regclass);
 C   ALTER TABLE public."LanguageLevel" ALTER COLUMN "ID" DROP DEFAULT;
       public       postgres    false    205    204            �
           2604    32800    Notifications ID    DEFAULT     l   ALTER TABLE ONLY "Notifications" ALTER COLUMN "ID" SET DEFAULT nextval('"Notifications_ID_seq"'::regclass);
 C   ALTER TABLE public."Notifications" ALTER COLUMN "ID" DROP DEFAULT;
       public       postgres    false    229    228    229            �
           2604    32773    OnlineUsers ID    DEFAULT     h   ALTER TABLE ONLY "OnlineUsers" ALTER COLUMN "ID" SET DEFAULT nextval('"OnlineUsers_ID_seq"'::regclass);
 A   ALTER TABLE public."OnlineUsers" ALTER COLUMN "ID" DROP DEFAULT;
       public       postgres    false    222    223    223            �
           2604    25194    Post ID    DEFAULT     Z   ALTER TABLE ONLY "Post" ALTER COLUMN "ID" SET DEFAULT nextval('"Post_ID_seq"'::regclass);
 :   ALTER TABLE public."Post" ALTER COLUMN "ID" DROP DEFAULT;
       public       postgres    false    207    206            �
           2604    25341 
   Reports ID    DEFAULT     `   ALTER TABLE ONLY "Reports" ALTER COLUMN "ID" SET DEFAULT nextval('"Reports_ID_seq"'::regclass);
 =   ALTER TABLE public."Reports" ALTER COLUMN "ID" DROP DEFAULT;
       public       postgres    false    220    221    221            �
           2604    25195    TranslationRequests ID    DEFAULT     x   ALTER TABLE ONLY "TranslationRequests" ALTER COLUMN "ID" SET DEFAULT nextval('"TranslationRequests_ID_seq"'::regclass);
 I   ALTER TABLE public."TranslationRequests" ALTER COLUMN "ID" DROP DEFAULT;
       public       postgres    false    209    208            �
           2604    25196    User ID    DEFAULT     Z   ALTER TABLE ONLY "User" ALTER COLUMN "ID" SET DEFAULT nextval('"User_ID_seq"'::regclass);
 :   ALTER TABLE public."User" ALTER COLUMN "ID" DROP DEFAULT;
       public       postgres    false    213    210            �
           2604    25197    UserInformation ID    DEFAULT     p   ALTER TABLE ONLY "UserInformation" ALTER COLUMN "ID" SET DEFAULT nextval('"UserInformation_ID_seq"'::regclass);
 E   ALTER TABLE public."UserInformation" ALTER COLUMN "ID" DROP DEFAULT;
       public       postgres    false    212    211            �
           2604    25198    ViewedProfile ID    DEFAULT     l   ALTER TABLE ONLY "ViewedProfile" ALTER COLUMN "ID" SET DEFAULT nextval('"ViewedProfile_ID_seq"'::regclass);
 C   ALTER TABLE public."ViewedProfile" ALTER COLUMN "ID" DROP DEFAULT;
       public       postgres    false    215    214            �
           2604    25199    WebSites ID    DEFAULT     b   ALTER TABLE ONLY "WebSites" ALTER COLUMN "ID" SET DEFAULT nextval('"WebSites_ID_seq"'::regclass);
 >   ALTER TABLE public."WebSites" ALTER COLUMN "ID" DROP DEFAULT;
       public       postgres    false    217    216            �
           2604    32781    messages ID    DEFAULT     `   ALTER TABLE ONLY messages ALTER COLUMN "ID" SET DEFAULT nextval('"messages_ID_seq"'::regclass);
 <   ALTER TABLE public.messages ALTER COLUMN "ID" DROP DEFAULT;
       public       postgres    false    225    224    225            �          0    25116    AboutMe 
   TABLE DATA               �   COPY "AboutMe" ("ID", "aboutMe", requests, "languageExcRequests", "hobbiesInterests", "favMusics", "favMovies", "favTvShows", "favBooks", quotes) FROM stdin;
    public       postgres    false    196   �       �          0    25124    Answers 
   TABLE DATA               F   COPY "Answers" ("ID", "userID", "questionID", date, text) FROM stdin;
    public       postgres    false    198   Y�       �          0    32789    Blocks 
   TABLE DATA               6   COPY "Blocks" ("ID", "userID", "blockID") FROM stdin;
    public       postgres    false    227   O�       �          0    25132    Friend 
   TABLE DATA               7   COPY "Friend" ("ID", "userID", "friendID") FROM stdin;
    public       postgres    false    200   l�       �          0    25142    Images 
   TABLE DATA               8   COPY "Images" ("ID", "userID", url, avatar) FROM stdin;
    public       postgres    false    202   ��       �          0    25147    LanguageLevel 
   TABLE DATA               Y   COPY "LanguageLevel" ("ID", "userID", language, level, "learningOrSpeaking") FROM stdin;
    public       postgres    false    204   D�       �          0    32797    Notifications 
   TABLE DATA               Q   COPY "Notifications" ("ID", "userID", "nUserID", notification, read) FROM stdin;
    public       postgres    false    229   i�       �          0    32770    OnlineUsers 
   TABLE DATA               0   COPY "OnlineUsers" ("ID", "userID") FROM stdin;
    public       postgres    false    223   m�       �          0    25152    Post 
   TABLE DATA               8   COPY "Post" ("ID", "userID", content, date) FROM stdin;
    public       postgres    false    206   ��       �          0    25338    Reports 
   TABLE DATA               I   COPY "Reports" ("ID", "userID", "reportedID", content, date) FROM stdin;
    public       postgres    false    221   �       �          0    25157    TranslationRequests 
   TABLE DATA               t   COPY "TranslationRequests" ("ID", "userID", text, "textLanguage", "languageToTranslation", date, title) FROM stdin;
    public       postgres    false    208   .�       �          0    25165    User 
   TABLE DATA               �   COPY "User" ("ID", "userName", mail, password, "registerDate", "registerStatus", "lastLogin", ip, "userStatus", "aboutMeID", "userInformationID", "webSitesID") FROM stdin;
    public       postgres    false    210   ը       �          0    25168    UserInformation 
   TABLE DATA               T   COPY "UserInformation" ("ID", name, country, city, "birthDate", gender) FROM stdin;
    public       postgres    false    211   B�       �          0    25175    ViewedProfile 
   TABLE DATA               I   COPY "ViewedProfile" ("ID", "userID", viewer, "displayDate") FROM stdin;
    public       postgres    false    214   i�       �          0    25180    WebSites 
   TABLE DATA               O   COPY "WebSites" ("ID", facebook, twitter, instagram, skype, other) FROM stdin;
    public       postgres    false    216   �       �          0    25325 	   countries 
   TABLE DATA               ;   COPY countries (id, sortname, name, phonecode) FROM stdin;
    public       postgres    false    218   !�       �          0    32778    messages 
   TABLE DATA               R   COPY messages ("ID", "userID", receiver, message, date, "readStatus") FROM stdin;
    public       postgres    false    225   )�       �          0    25330    states 
   TABLE DATA               /   COPY states (id, name, country_id) FROM stdin;
    public       postgres    false    219   ��       �           0    0    AboutMe_ID_seq    SEQUENCE SET     7   SELECT pg_catalog.setval('"AboutMe_ID_seq"', 5, true);
            public       postgres    false    197            �           0    0    Answers_ID_seq    SEQUENCE SET     8   SELECT pg_catalog.setval('"Answers_ID_seq"', 13, true);
            public       postgres    false    199            �           0    0    Blocks_ID_seq    SEQUENCE SET     6   SELECT pg_catalog.setval('"Blocks_ID_seq"', 1, true);
            public       postgres    false    226            �           0    0    Friend_ID_seq    SEQUENCE SET     7   SELECT pg_catalog.setval('"Friend_ID_seq"', 47, true);
            public       postgres    false    201            �           0    0    Images_ID_seq    SEQUENCE SET     7   SELECT pg_catalog.setval('"Images_ID_seq"', 62, true);
            public       postgres    false    203            �           0    0    LanguageLevel_ID_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('"LanguageLevel_ID_seq"', 141, true);
            public       postgres    false    205            �           0    0    Notifications_ID_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('"Notifications_ID_seq"', 101, true);
            public       postgres    false    228            �           0    0    OnlineUsers_ID_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('"OnlineUsers_ID_seq"', 247, true);
            public       postgres    false    222            �           0    0    Post_ID_seq    SEQUENCE SET     5   SELECT pg_catalog.setval('"Post_ID_seq"', 40, true);
            public       postgres    false    207            �           0    0    Reports_ID_seq    SEQUENCE SET     7   SELECT pg_catalog.setval('"Reports_ID_seq"', 1, true);
            public       postgres    false    220            �           0    0    TranslationRequests_ID_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('"TranslationRequests_ID_seq"', 15, true);
            public       postgres    false    209            �           0    0    UserInformation_ID_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('"UserInformation_ID_seq"', 17, true);
            public       postgres    false    212            �           0    0    User_ID_seq    SEQUENCE SET     5   SELECT pg_catalog.setval('"User_ID_seq"', 47, true);
            public       postgres    false    213            �           0    0    ViewedProfile_ID_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('"ViewedProfile_ID_seq"', 25, true);
            public       postgres    false    215            �           0    0    WebSites_ID_seq    SEQUENCE SET     8   SELECT pg_catalog.setval('"WebSites_ID_seq"', 6, true);
            public       postgres    false    217            �           0    0    messages_ID_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('"messages_ID_seq"', 286, true);
            public       postgres    false    224            �
           2606    25201    AboutMe AboutMe_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY "AboutMe"
    ADD CONSTRAINT "AboutMe_pkey" PRIMARY KEY ("ID");
 B   ALTER TABLE ONLY public."AboutMe" DROP CONSTRAINT "AboutMe_pkey";
       public         postgres    false    196            �
           2606    25203    Answers Answers_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY "Answers"
    ADD CONSTRAINT "Answers_pkey" PRIMARY KEY ("ID");
 B   ALTER TABLE ONLY public."Answers" DROP CONSTRAINT "Answers_pkey";
       public         postgres    false    198                       2606    32794    Blocks Blocks_pkey 
   CONSTRAINT     O   ALTER TABLE ONLY "Blocks"
    ADD CONSTRAINT "Blocks_pkey" PRIMARY KEY ("ID");
 @   ALTER TABLE ONLY public."Blocks" DROP CONSTRAINT "Blocks_pkey";
       public         postgres    false    227            �
           2606    25207    Friend Friend_pkey 
   CONSTRAINT     O   ALTER TABLE ONLY "Friend"
    ADD CONSTRAINT "Friend_pkey" PRIMARY KEY ("ID");
 @   ALTER TABLE ONLY public."Friend" DROP CONSTRAINT "Friend_pkey";
       public         postgres    false    200            �
           2606    25209    Images Images_pkey 
   CONSTRAINT     O   ALTER TABLE ONLY "Images"
    ADD CONSTRAINT "Images_pkey" PRIMARY KEY ("ID");
 @   ALTER TABLE ONLY public."Images" DROP CONSTRAINT "Images_pkey";
       public         postgres    false    202            �
           2606    25211     LanguageLevel LanguageLevel_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY "LanguageLevel"
    ADD CONSTRAINT "LanguageLevel_pkey" PRIMARY KEY ("ID");
 N   ALTER TABLE ONLY public."LanguageLevel" DROP CONSTRAINT "LanguageLevel_pkey";
       public         postgres    false    204                       2606    32802     Notifications Notifications_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY "Notifications"
    ADD CONSTRAINT "Notifications_pkey" PRIMARY KEY ("ID");
 N   ALTER TABLE ONLY public."Notifications" DROP CONSTRAINT "Notifications_pkey";
       public         postgres    false    229                       2606    32775    OnlineUsers OnlineUsers_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY "OnlineUsers"
    ADD CONSTRAINT "OnlineUsers_pkey" PRIMARY KEY ("ID");
 J   ALTER TABLE ONLY public."OnlineUsers" DROP CONSTRAINT "OnlineUsers_pkey";
       public         postgres    false    223            �
           2606    25213    Post Post_pkey 
   CONSTRAINT     K   ALTER TABLE ONLY "Post"
    ADD CONSTRAINT "Post_pkey" PRIMARY KEY ("ID");
 <   ALTER TABLE ONLY public."Post" DROP CONSTRAINT "Post_pkey";
       public         postgres    false    206                       2606    25343    Reports Reports_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY "Reports"
    ADD CONSTRAINT "Reports_pkey" PRIMARY KEY ("ID");
 B   ALTER TABLE ONLY public."Reports" DROP CONSTRAINT "Reports_pkey";
       public         postgres    false    221            �
           2606    25215 ,   TranslationRequests TranslationRequests_pkey 
   CONSTRAINT     i   ALTER TABLE ONLY "TranslationRequests"
    ADD CONSTRAINT "TranslationRequests_pkey" PRIMARY KEY ("ID");
 Z   ALTER TABLE ONLY public."TranslationRequests" DROP CONSTRAINT "TranslationRequests_pkey";
       public         postgres    false    208                       2606    25217 $   UserInformation UserInformation_pkey 
   CONSTRAINT     a   ALTER TABLE ONLY "UserInformation"
    ADD CONSTRAINT "UserInformation_pkey" PRIMARY KEY ("ID");
 R   ALTER TABLE ONLY public."UserInformation" DROP CONSTRAINT "UserInformation_pkey";
       public         postgres    false    211            �
           2606    25219    User User_pkey 
   CONSTRAINT     K   ALTER TABLE ONLY "User"
    ADD CONSTRAINT "User_pkey" PRIMARY KEY ("ID");
 <   ALTER TABLE ONLY public."User" DROP CONSTRAINT "User_pkey";
       public         postgres    false    210                       2606    25221     ViewedProfile ViewedProfile_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY "ViewedProfile"
    ADD CONSTRAINT "ViewedProfile_pkey" PRIMARY KEY ("ID");
 N   ALTER TABLE ONLY public."ViewedProfile" DROP CONSTRAINT "ViewedProfile_pkey";
       public         postgres    false    214                       2606    25223    WebSites WebSites_pkey 
   CONSTRAINT     S   ALTER TABLE ONLY "WebSites"
    ADD CONSTRAINT "WebSites_pkey" PRIMARY KEY ("ID");
 D   ALTER TABLE ONLY public."WebSites" DROP CONSTRAINT "WebSites_pkey";
       public         postgres    false    216            	           2606    25329    countries countries_pkey 
   CONSTRAINT     O   ALTER TABLE ONLY countries
    ADD CONSTRAINT countries_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.countries DROP CONSTRAINT countries_pkey;
       public         postgres    false    218                       2606    32786    messages messages_pkey 
   CONSTRAINT     O   ALTER TABLE ONLY messages
    ADD CONSTRAINT messages_pkey PRIMARY KEY ("ID");
 @   ALTER TABLE ONLY public.messages DROP CONSTRAINT messages_pkey;
       public         postgres    false    225                       2606    25334    states states_pkey 
   CONSTRAINT     I   ALTER TABLE ONLY states
    ADD CONSTRAINT states_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.states DROP CONSTRAINT states_pkey;
       public         postgres    false    219            �
           1259    25224    fki_answers_question    INDEX     K   CREATE INDEX fki_answers_question ON "Answers" USING btree ("questionID");
 (   DROP INDEX public.fki_answers_question;
       public         postgres    false    198            �
           1259    25225    fki_answers_user    INDEX     C   CREATE INDEX fki_answers_user ON "Answers" USING btree ("userID");
 $   DROP INDEX public.fki_answers_user;
       public         postgres    false    198            �
           1259    25228    fki_friend_user_1    INDEX     C   CREATE INDEX fki_friend_user_1 ON "Friend" USING btree ("userID");
 %   DROP INDEX public.fki_friend_user_1;
       public         postgres    false    200            �
           1259    25229    fki_friend_user_2    INDEX     E   CREATE INDEX fki_friend_user_2 ON "Friend" USING btree ("friendID");
 %   DROP INDEX public.fki_friend_user_2;
       public         postgres    false    200            �
           1259    25230    fki_images_user    INDEX     A   CREATE INDEX fki_images_user ON "Images" USING btree ("userID");
 #   DROP INDEX public.fki_images_user;
       public         postgres    false    202            �
           1259    25231    fki_language_user    INDEX     J   CREATE INDEX fki_language_user ON "LanguageLevel" USING btree ("userID");
 %   DROP INDEX public.fki_language_user;
       public         postgres    false    204            �
           1259    25232    fki_post_user    INDEX     =   CREATE INDEX fki_post_user ON "Post" USING btree ("userID");
 !   DROP INDEX public.fki_post_user;
       public         postgres    false    206            �
           1259    25233    fki_tr_user    INDEX     J   CREATE INDEX fki_tr_user ON "TranslationRequests" USING btree ("userID");
    DROP INDEX public.fki_tr_user;
       public         postgres    false    208            �
           1259    25234    fki_user_aboutMe    INDEX     E   CREATE INDEX "fki_user_aboutMe" ON "User" USING btree ("aboutMeID");
 &   DROP INDEX public."fki_user_aboutMe";
       public         postgres    false    210            �
           1259    25235    fki_user_information    INDEX     O   CREATE INDEX fki_user_information ON "User" USING btree ("userInformationID");
 (   DROP INDEX public.fki_user_information;
       public         postgres    false    210            �
           1259    25236    fki_user_webSites    INDEX     G   CREATE INDEX "fki_user_webSites" ON "User" USING btree ("webSitesID");
 '   DROP INDEX public."fki_user_webSites";
       public         postgres    false    210                       1259    25237    fki_viewed_user    INDEX     H   CREATE INDEX fki_viewed_user ON "ViewedProfile" USING btree ("userID");
 #   DROP INDEX public.fki_viewed_user;
       public         postgres    false    214                       1259    25238    fki_viewed_user_2    INDEX     H   CREATE INDEX fki_viewed_user_2 ON "ViewedProfile" USING btree (viewer);
 %   DROP INDEX public.fki_viewed_user_2;
       public         postgres    false    214                       2606    25239    Answers answers_question    FK CONSTRAINT     �   ALTER TABLE ONLY "Answers"
    ADD CONSTRAINT answers_question FOREIGN KEY ("questionID") REFERENCES "TranslationRequests"("ID");
 D   ALTER TABLE ONLY public."Answers" DROP CONSTRAINT answers_question;
       public       postgres    false    198    2809    208                       2606    25244    Answers answers_user    FK CONSTRAINT     k   ALTER TABLE ONLY "Answers"
    ADD CONSTRAINT answers_user FOREIGN KEY ("userID") REFERENCES "User"("ID");
 @   ALTER TABLE ONLY public."Answers" DROP CONSTRAINT answers_user;
       public       postgres    false    210    2812    198                       2606    25259    Friend friend_user_1    FK CONSTRAINT     k   ALTER TABLE ONLY "Friend"
    ADD CONSTRAINT friend_user_1 FOREIGN KEY ("userID") REFERENCES "User"("ID");
 @   ALTER TABLE ONLY public."Friend" DROP CONSTRAINT friend_user_1;
       public       postgres    false    200    2812    210                       2606    25315    Friend friend_user_2    FK CONSTRAINT     m   ALTER TABLE ONLY "Friend"
    ADD CONSTRAINT friend_user_2 FOREIGN KEY ("friendID") REFERENCES "User"("ID");
 @   ALTER TABLE ONLY public."Friend" DROP CONSTRAINT friend_user_2;
       public       postgres    false    200    2812    210                       2606    25269    Images images_user    FK CONSTRAINT     i   ALTER TABLE ONLY "Images"
    ADD CONSTRAINT images_user FOREIGN KEY ("userID") REFERENCES "User"("ID");
 >   ALTER TABLE ONLY public."Images" DROP CONSTRAINT images_user;
       public       postgres    false    210    202    2812                       2606    25274    LanguageLevel language_user    FK CONSTRAINT     r   ALTER TABLE ONLY "LanguageLevel"
    ADD CONSTRAINT language_user FOREIGN KEY ("userID") REFERENCES "User"("ID");
 G   ALTER TABLE ONLY public."LanguageLevel" DROP CONSTRAINT language_user;
       public       postgres    false    210    2812    204                       2606    25279    Post post_user    FK CONSTRAINT     e   ALTER TABLE ONLY "Post"
    ADD CONSTRAINT post_user FOREIGN KEY ("userID") REFERENCES "User"("ID");
 :   ALTER TABLE ONLY public."Post" DROP CONSTRAINT post_user;
       public       postgres    false    206    2812    210                       2606    25284    TranslationRequests tr_user    FK CONSTRAINT     r   ALTER TABLE ONLY "TranslationRequests"
    ADD CONSTRAINT tr_user FOREIGN KEY ("userID") REFERENCES "User"("ID");
 G   ALTER TABLE ONLY public."TranslationRequests" DROP CONSTRAINT tr_user;
       public       postgres    false    208    2812    210                       2606    25289    User user_aboutMe    FK CONSTRAINT     p   ALTER TABLE ONLY "User"
    ADD CONSTRAINT "user_aboutMe" FOREIGN KEY ("aboutMeID") REFERENCES "AboutMe"("ID");
 ?   ALTER TABLE ONLY public."User" DROP CONSTRAINT "user_aboutMe";
       public       postgres    false    2790    196    210                       2606    25294    User user_information    FK CONSTRAINT     �   ALTER TABLE ONLY "User"
    ADD CONSTRAINT user_information FOREIGN KEY ("userInformationID") REFERENCES "UserInformation"("ID");
 A   ALTER TABLE ONLY public."User" DROP CONSTRAINT user_information;
       public       postgres    false    210    2817    211                        2606    25299    User user_webSites    FK CONSTRAINT     s   ALTER TABLE ONLY "User"
    ADD CONSTRAINT "user_webSites" FOREIGN KEY ("webSitesID") REFERENCES "WebSites"("ID");
 @   ALTER TABLE ONLY public."User" DROP CONSTRAINT "user_webSites";
       public       postgres    false    2823    210    216            !           2606    25304    ViewedProfile viewed_user    FK CONSTRAINT     p   ALTER TABLE ONLY "ViewedProfile"
    ADD CONSTRAINT viewed_user FOREIGN KEY ("userID") REFERENCES "User"("ID");
 E   ALTER TABLE ONLY public."ViewedProfile" DROP CONSTRAINT viewed_user;
       public       postgres    false    210    214    2812            "           2606    25309    ViewedProfile viewed_user_2    FK CONSTRAINT     p   ALTER TABLE ONLY "ViewedProfile"
    ADD CONSTRAINT viewed_user_2 FOREIGN KEY (viewer) REFERENCES "User"("ID");
 G   ALTER TABLE ONLY public."ViewedProfile" DROP CONSTRAINT viewed_user_2;
       public       postgres    false    214    2812    210            �   a   x�e�1@0 ��+��`0镚3�d��L��S����`�	S�V�\�K/^Y Fư��bPN �[����	��]�oVb��;�����2�<Z,"�      �   �   x����N�0�g�)~��&i���1tcd��C����� ����Jw�����xw�}��1�Y)�(�6�M]oە:p쩣+��;��$8p/�q'��Ga�*�'��!�$�^��Ϲt)D;-��Ý?�R��#��+�-G'n����n� �i���Qͦ���4mk����x��mB�)���ט�Ń	Q(��S�Sf�r��\�Y���6j��57J��2���?��S����?�(      �      x������ � �      �   B   x����0��0US�&٥��Q�d!|�ܡ;���럪�@#*&OO&�d!�3ь����(�V�����      �   v   x�m�K
�@E���$�yխ{
		*=��[�] ��]U0�����6��ed����\�-`r���om�
f�����9��Ϡ:W��%��y�:�`u^���kjy�Y4����2���Q      �     x����N�0Dϛ��@�I{L���!
7.�d�XIM�8����"	���<�̮W�-���ju_�#:}�ձ#lȂ���Y�'{A;��1do�-]�8�p�� �姦�O��׮#�:�_Q��;�ScR�J�:^�L�Ib�wC[�ՁF�	���T2�%Y�-�tR�,�:8lC�JAɹ6�KI~�j�d��h2�O2f�;4�S(I
������I����u�d}���W4�ߊb�Β)j�Րm�>Sxz��LY�t�X�?f�a������n�(�f���      �   �   x���Mn� ��p
N0"	?�.�DP�F!%L�޾Rf5�m�|���l�d�2%���{,�+ݳ�r
��/�p3|"�¹%�aj����z�7�V| �H�s�>�8�	�4�Tq��h�;��w���~�Һ�E�$ʻ?>�~/"�,J���6���G� ��Ҟۘ�W���r������HG��՘�1�#��:�;]#�������+�y�6��8��:}M?����;���Ls��-��.��o���      �      x������ � �      �   w   x�5�Q
1D��S���$�{{���bA�oo������PNPm]G�f{�	�d�3sV$���'�X���B��n��O��ؔ����:F��cގ�%������B���e� �      �      x������ � �      �   �  x�m��n�0�g�)�LiC�l�I�-�4�7E�.Gֱt*^^\(S_�S��ٻ�O�')�4E�������Z��JmFX2	ؐ��.��N��9��c��Z��b;���c�|C�� �RdP�R�IAvxu���GqZ��vz:���Ȟb�<���۩���d�D�uc;-�W��YU����b���'z-{.�����]�Y�t$<�tryϺĖ���C�}� �ҧ���':�0ɷ�1�N���&?L�/�R���a�SC3�V`$��Q<7���:����EU�z�>����}��#���R�K��O߾G4�G�b����2bOv���΃%��^Hτ����V{���!V���h�lۀ��R������榆b�9�1D6���u��V���sY�o��q      �   ]  x�]��r�@���sd44 ;T�� 8V6�di�>}�ou��?l���oD�����Νc�����o���#;\'�ZO?�h��w����f�Ͱfe�i}�� Y,����@�<�h�u�@�=��@
�D�,�����c��_������.�XsÐYx'��MP+�_�&���{mI��{��!����N�)�ȗ |� 1�i�����K�Et���j9��z�,�u�Ŏ���6.,!4\�ҿ�:�Q'�X�ȫ��:��;���{Э9��L�; �3��m�.&��gvM���$�j~��Ej�Ⲽ�6�j�.-F�l��d!�����0� j�v���ӽx�����m�^��~��L�;e4�j�h���o�&��9��+��dX��7坎Z:�#.�����-��&,�^��z���,H�ա�/f�?Y�g��|�ĒF�����P�ۛ�Ng[:2�J������ʱ����[�{�1�7=��۫N�ƆC�f�G)���3��8d؎ޔw:����:f�>��(vc��
���%�P���SX�M��)#ʻΔ��B�vxÊa.�Iʧ������{�ؔ����n�E�_�4.~      �     x�m�QR�0E�_W��IT������i��8��m:��:��E�]P��?��{���J7h^��u2�����u{}��N�@'�&�:V�:��I�ق�骇��06�1���B@�� �*E�X˞�k�W�۔a�.�f���t)�<�3����(�g���8��8�t���N����<Ym��T�����]��N�_�P����LEҚF(oT�=�RmU��Po@��-<��8���?c��1�����w�~�__�e�m��1f���vE�2 tn      �   j   x�U���0г���7�%�ױ�#E���0h_#��(�0kx}��1�_�qp�նԄ��|���^^�w�l*���63��v�z�1rB�:�{��Cz��?�����"W      �   .   x�3��NL�,�--�)Efrrr�B�ũi��y�98y&'W� �@�      �   �  x�}X[s�H�}>�z��#vg��Q�1��%���j�XH]����;)��g7b_쨣�dVf�<��h�����U��1lDsDَ���y���3��.	ؖc��Dg��*7u.,?p� Q~(ʒK���#�'p,2�t]��h*�&͈X����jU�k"�er7���]sh���A�BT5g�
�kX���Y�&w�Љ"͎�]�rm5U]��s|˰���
pâ���C�;��!wr#�=uRgU�듦�mX]�&�*��.W����LtuBt+D�1_�J����A�	=����h�g�zCA�is�c��޳ 釆ױ�A�@��l;4l�����^��r����S�FQv����Y�F���ShtD��-���:��>or�N�5l���	u���>!z�%Լ�ڜV�1B}X�W��4�d��)�*�:�N�4?�̋���ߵ.	��C����:��ks���&;��M��p�܈P�B�̑�
�̥tp*p��a{]��1���λ�"C����(xWg�G�r%We8!�[_����AsN`�̞^δ��%�帞�Z��g�1q���5�W���e鞋}õ��R��A�a�1v�ꢿ�!/4��C��Ò�&u�R���G�����L3���ۗ1~�6\:w�Yq�IH��`Fw�sQ2�l?4\�7Ƨ}���Y�_�!��u�`��žT�7�L��3n^���" l��"L�0WR�^�7<:=%Xks�ӷ"-����n���C���	��OV�o��M�Ջ����G��}�X�1<�#rym���zt���?��~��^����gU��!�B�0�#�M-��~����b��ef��_�/1��Nh��C�n�S^/�1|�>����\���������m�=$[3rb�v���$����(�A�47i������
C�H)��0bX�ŕ�l�1\cX���Uس�n��պ̹�g���2���x�ka4�He/ïPz��ѵ1�秲�_�F�����������єpަ��q���
�R�{�1��tı�%z),�E�],��e�]r]�u7����0b'���C��n�q���II���1�R-'ۼ���x��.�#�C�l)Y���8O0>��Fs�)�鎗��C�����
�Rkq�c�4o�W���t1v��</1ff�h^Y�!��g�Ǯe��{-�Z�U&�c��G�C�+}ii9�i������	c�7�����T�;񌐾<�\�{��1Q�d��I��V�=%�
��ό`��b����M�$Ex\��L��9�?�����ɵ< �d�I���/ Z��	�{}K��;�mG ���ؘd\�R����`�´��%������D���C�?we�����1�J�36;٣���Ze4%�8�]�;v�������nI���J��w���wmQG���(b��F1{�L}��S��(%�%fC�t~�Z�e.fS��2ݑؘ�<�bb�Ĭ`U������\��lu��dG �t1{��yg�x�G��>��R/W]ʦ!��\��X��-��[�t�Rb��\S��@6�	���O$v_�9��0OwWE��,�'��)�Q���O	�ok�W���pm�=u�|����*D�Ei1�`���ٌ���0�/���ګ�g��!���p%9�EM�	�QU{V�-�SY�D3�N*������Z��&O�����7F�b.�`\&fS>�kע2x	T�1�����4y�[���xY�T��$@��E-�oT�韍T��DwVDRV{%�͹��憦lb6�Ģ�x+.E]�a[��#b�W�/ �F1�a���)�x���ś\:]�����rŕN��I/�������j��ꊤ�jR�T�C.�=WۖL?�	}��w6)ޢb�iy��U��`a�Ω���E�bE�ꌭB �%�UI��4��hA@���QS~�1^)�b�_���]�]R�R`��w���[���l������UF��S,X����,&&�X	���p-�b|��O�6���z)#�x�˗P����h�Z�U,ҕR�K8�V�(�2�]�]�H�1��-��b)�3,����%�O>�H꾼(�� ����UOS_��Tx�23�2�̜�G�y5�rL䕯���tk">�E����+�0��X��!�E��`I���r%K��B�\`��{�����E)����]�.ݣX�	�usd8��o�%�]]�x,(�$��#|W҄CIv�Ր2��S��B�l��{��s[b�N;�j�USI�������� �,��d�������LK�'e/n�,��}g.�[��R����mƼ٧�����_���vS)���z����s�6�8�9@�U6�J��+��C��+�o��qͬ\j�{R<$k���.��C���O_�C��$���CjF�����)!��s-q�mƁ"b�#��m�W	-֗�I�EiK�!�9qS�sM>�Q��D2&����^�e��d�$#=�H��s$���̥3R6<r-P���T�,(s3�)&�y��/:�oR��䞟έƵI�6u�3���z{����TK�������N�����1�Ɛ��1���.��9W��S0�9�m5�M���0|v���XF�ɛ�v"�$�wm8/��+��$yF�.�V]�h
�!A}��>>����i�q%Gȃ�:$yBr)�@;\��V��@zX��#�$��M�~&�\��'?At��`}RW;|YLe>ƺ��-f�X�8~�-=��(���'�<`d���c�ƚw����u�S܂��=(F��Y�U�[�,q�^*_���M�F��{�Uu����~��Z�}j����v%�'�-'��C��.6cl�7V�#l"l^����@����Z��1���R�DW~��t�}~�1�ŹMS
�M��!��2��&�;L�ȋҼo���~���6O͍ؔ�i5�������
���lU�7�tZ�|l#Bu������z��|h����D��5�!���2{���]`�ꚹ�@�	�a�|e���헝o���$J����&m�o�	/�*�a�Vxz�Ԩ��_�OƱ�{�<��IMԉͨ�!6��O��gb�J�}�6xj�7h�.m��y���>Y7r���<��ڽ��bMP�DKD�6�_�R���oGi+��*h؊#�ǒT�L�GD{/�s�-���Qq��������V��ZJN��~AAc��'��%�W���'�Mm��6�(�g|T�[ђ1��o���Ded�|i��,Vģ۷����G$W�8��2���a��R�      �      x�M�1�0Eg�ebCq��dcC�CP� ��SR�e~��?d<A���`�Å���E��д�h�2>KW_��x�&�v��/u�u����p���n~�u\1c(usCj����vr�}��)g      �      x�|�˖�-8��B3w�:��4�z���r��3HB�H����LK�������VO��z� d�Oߵ*m�� �x �e���T����0���~g��۶�f���/s�(3�ܘ�m�m��f_��	��n��T�{�=s�i��:{^�Dw4�f���\��M��P�4� ��1�t��Ebl��6��^ز��Y���9�^���1����i.���썫����*��TU/U�3mQ9m�l����8�ȳw��MgN��M��֕o��[��)5q~��7��0�Gk�
Ͳ�P\���|��	�. ���kK���=����W�w�M���:cǕ���t�caP�c�"�m����,��7�g��WM>؃�\̲�n_ئ�(4�>����)�Ⱦ�{�v���Ww:9m�b�}3�+�E����E��,��[�
����:|�'�m�����&�n�a�,gٟ��&�,�.�g��ϴҸ_��G���������<�����]ϳW�S�^�ҿ,��k���eu�_����,{ce����c���4������z/��9����~�]k�{��+�c+cpafI���c�On���(����d͉��,�誦���<��7�������9��_�K%.B�@4��k���ƚPZ����-m�}�;j�-�fj'���|ړ>�ϲ?� ͗ϳ?Ms0G�^d�7����C�_rtx_�pWKb�i��j!r�,�+��5c��Mc[���d/˝iQ�Y��ن�0��]�O�
,�טA��Io�av���g�t�/}���7{�����b*�{�����>I�3�lv�-�γ��ZH�E�6��@j����B��b���4�u�5��M�k����{�L���:A��g�C���`�ڦ����GN�����'+?�P��JaB'�jg7���1g�'�ٖ�֬��*����g��6�^z�3,���^��sWbv,���\�9��D�;��7�,�<�S�B�QԵم�9�Z�R��9��!-�ǂ��T{j�͞����g�)Xa���T���Y��O���ۦq�����#��$	uaq}�D'��ܽ+��A�w!׆s��:�-�b�����;���~H	X�{Ӟ����~�1i��J�%�8��^e�m$V�O�i�p	��j��h�L\N�΅�[p�)�V̯�sw�{�ߗ��U�9�샛�L=5�����N�������_�%Ws���|b,����\CkR"��N��Zm;��o+�6`�zJ
�R�KS��b5�����i����쏪b㞙G��|,��"t�V,:?�_�����%'�	F��>�*A.qo���G�s_�����P���x��f҄f,i,Ġ����,� �4!�F��+ǘ�3�c�M��&���,u����5B������m�˅����e���T��w��%[�f�!1��'�%�e�7�Y�X|�Z��\����voJpZ�i���4��䷾t�;�}��ILX�Y���{-�{�t!9_��ڠ)X#��a}�u��7��vR ��7�ӧ�����~���h��������G�tZ�2B_�[��ؚP��`a��y@b�W_õ�����/�-�k�v����wԟsp2��otS�2��ڣ�r��/��|3ٗ�U�0�]�������y�m�i�����;ɴ�o�0�!U�0G�_r��\ c��$�������̳�oy<�����5�1E3
���4�=���ô���� �"@���`��X��� ���%s$�G��rKok�Nn��0��+R�7�3A���b����R��o�o�\�l�=���S�:?ye��_au��|q>�\g�|S�6~���%(��ͪsH���G���`1���$Kh��C#��>��^TIH����}�9;�������ӄ�k���.��6��"��Uz+�3G�	^b-�К\�-�&���1�X��}_�:��n(]�; �Y���E
�����)���5U�����Ű�D
3ˌ�Fk�����v����d-��
O�fz����.�k'/�!)�����}0��%��s<�A���~R�iz��	WO�CT�0~C�`|Pb��z��?���!Pa�*	��ԧ��
��=Ø��\M�"����R��-t���=��h�G��`�B�+!|��Zj;@,J����s�ԷX��ݵ�����-;[T�l�@��5އ�1��;���{����T�ܫ�����`&Xj.D���Ǯ�Mx��O9�*i�ڵ�ghy�-w�o���U��̿��C`}\�����O 6���������n�WԲ��S`��C8�s�����SiK�	�;.z1�ּ�vҲHEW�'�\���B�n��H��Ҳ	f�u�7Џ�H�<I�,&]%ߘ��q"ds_
���K��oJd��%�`��J�q%!I��^#�o�h��+�\�<ߨ�P��̹�7��e�`�_�����o|��.T&w�Z�_�K�wKa/�����O-���h��^��/�z�k�@�+�TN��e�)�CO��#HlH�
��6����eqCkM}����������?
Qr��;��_b�-/��iV
����C����U���5f�EZ���LפǶ�̾2W���nw��� f�-V���(���+R*��e0��6�*W�@r�螔���+��͡|۞S�(��^�n f�����R���Ҝ�|oks�͓v����q\��.�Y�'�*��u�q]f_����}`�_��QR9"�ԃ9�˳_ߒu����ਟ	��޸�A~����ߓ7�U`&��J���F]-Pz\ׄb��hr@V�������:3��3��2�M���t������8��4Ǟ�rIn�@�*�)|Ҡ�����Ha�q4��K@�j�[�0h�d�=~��A$M"�́�!6ًB�$��jsK�{�zSM�x�,�f�=�t��DvzA��KY���3�,��+0��h���S������/S��7۶>P[�si��`o�Q��PM`F��ؘ}�+1��E_��c{�Z��
�6jѽW������+�g{�7�؄�]���]�덚����kJ�4#�����>�ӛ�)�<��;����`��2���O��`d #<�Q[s�aL�T�K\�C/�bJ#-�q�`H�b���ը.�9��G�53���P�w��'8��ɇ���3g[� dN���2������9H#F7�@.0]?~`�}�Ic<苹�����@��)=����0�.H�S�NO��,��b��kϨO����r+��O]@m�����U4࢝�'��	v�q	F����w��ؐ-oF���>*�|��	�0LJY��c�M�<!�=�
6{��/�l�����R����N��S�N��@~+|e��W"S�o@,�7����Jb�7���.��(��?*�+}��&��~WBFn5�fպ=)�U�����9��=4��@����Y;HNgsn1s��Rrɕ�Y��*��fK�����m��2;����n��a�CA[�o�v$��޻J$/!�B�lE9: �`���T��y%��'�r�陋��{,(��1��������j�O�<��C�6"��Tp,[���������o����s1q-��Fr�ګ�ZfߠB��J���8_����A.2YR��6��)ƿ����}�+j9�ݝWj����mB���36�4�T_�����VZx���t�h`M�����p�:�|	z�tJ
Fa��F���%���豄)Is��!u��0ǐ�i/�=��>�r�C���E_wX͕^��G��Ia崕���D6��3��m����>�J��T�PV�]����>�f��s.}\��S�[�N��*�V�>k}l�F�N�|�\�Cz]jP�k������!�@����Z�"���\��ax��WbNnq�"��;�jɛ��b"70wJ]gj��<�mm&n��=r� W�\y�Ş�]�Nf�9c�Q��5�D<���a!k�΂���(��Ҝ/Vf)�+��G;�<N���o}�W]���.�LL�    N-� ua*�:dYs3����@�z4���z�m�#Dg��
oG��݄W`d��2<�#{�h�Dbr�ǟ���)���(p|4'�r��0ᢩԓy{��9��Q��P,�l�����@*���?�#3d����� V�}c��~s3R1wEH.�ۊ�	�"q�$��R)b������G�������h�-�l;h1��5^��!��.�'��naB"@���`����H��%�h9��ƸP %���y.��.�!�@q������Z�
��3�e�^hY�Z�%i�SRl�B� �����(4?�	\�^�����U�\�Il��B��eƽF�m��ڰ�"���}o�W���'o�����֌P�������Ԝ�-��'}FlA��5�� X��.Q8���r���Z�;���r��]C���4_�����[�l�"	.�7VJ�f��" 5�o;�
Y�~6n���%��>�h��|Me�:6q�Aq��!(	��׏FFi ��Q���{rM���^��K��-��9�h�sk��%父\�k�b��l_+_ҵBH|v���Pr����x
o(Y4f�Y�-�y.�Pʴ-9=L��`u߱�������`t���ih2lȑ�XfTY�k ��%/�[�L�'���#�"J��)FdK���B��?�'g���Eß�| �L�W
����9�Zچ�t�T��0�{�)����P)�!��{��B�Į>���r��zO���#|uv��Q c�KHŸ�KuC�B�G+������"�����gS���6Zq�&�����A�z�l7�p6��?p�K�=�Zz49�����T��c�B�������W{��Q��ex�#�����������k	�6�����a�e���͵�
�"d}H����{�V+�t��ﹾ@�)R9��O��+		���z�����5�訏��`���蜋�%U���am;hI�VN"n	��-�.����/��%��},�Q�k���;�4�2�}�|�b�����/��]��k��I��δM=�n�`�V�)�"�_���
.�����+�:�֠��2)�
_L��X*�t�BIL
.�w��Q�� ��E����|u�|Ҵ9�߃/'�j������;�C>u_A���v�Ͼ�RX���ﮰ�1!��L�[c���|���Q�����L�X�o������&=	���_�KȜ�`�>(�����g�A/U,�J�(�����\	-{=���ߓ����*<��V(`͉�4�ׇ�J�q>
m;�th��2�w�\:.~�"�@��z���'s�w���3ÿ���bd�R�%US�
P�����|��� u_�Y�م�sߠ�����#�n�K%m�M���+��
�è�w�`��������zf�-���@l�W���7�����P�+��L�+?�E�B�\$+:��|Z��
,�)�&{%�
{�ͅ���`�~��w���<�a�tD$�$�-�mk��<F�B���n�af��Dh��L�V�*P���z�-Wd7���'��[��B��kȱV,<��Pei&��j��q���N\��t��Qb��|�
I'��3�����'��Bї�������fN)^KB�($4'�O_���n��O�RReO�a�?�*�y��禎�{�R�v���z��Q[��{n�t�0K	�Ra����wv��jf4�\l=�&(D�9L i�,iwUrM3��ޕ�n`h����\��T���)�m�}��eo� ��Bܩ�:4
�)I����/�����E3ZPmE+�Z�5g��W����3��[�h��iNd-fv�D�}��)K'�O��SP�:u��"�B���ʣ��W�9�o낓b	b�DrJRtЯj���z��BЕ�ݻ���$�r��GʃU��w&�Ԩ�%���W�iO�����?�P���uﮅ����������r� \��،P�Xʍ����W�=�)�b���T��@��En7���7a�B�0\ǘw��q	�nB����@��e�ɛ����~綍Ql�kaL�%c�f]�DQ���D��0�B�B�20��F������4�}x���=�������O���CgY������ؑ`Xv���Q��Eر���ٸ���3�{g-M���G�\#ydRY�ל����(��I��&Z~�^��l�v�,*�HHEB��s1��=o�C�hC��АB�x�`�rE&-�6�I,����ʜ	���<τOH(��o�Xƾ���le�<�XX��H
��e���{���#�T[��y��¡�t
��46.6b���}����^h:�8�S����r�`��L��2�λ�>ϞT��Z����67bɧ�F�W�Ҋ�Y��8�wӟm�TΝ�����|>Ү�܀�Duo����`T��4U�y���r�Fs���K.Є�i����\t8����ܴ�4g9h��ꄝ���=���B.����M��J�d��-��hWi��=�,��?z��7J/U�堺�7�c����XP*0�l�	.���z+�������=}��}��G4��ɝ\�����\��9$Q��I�P]��U�#�P!�!���+���5��-�5�3��^�vt2��n�6��	��n����b���ςp7�jPr%|+@��/�K�)�Ϲ��Y��hn�	�U/L���+��p$�H��cmw�����.�Zd/�w�*M��`��D�pG����^5�2�ez�C᫸s��STO��>��0ةV�1�e���	�X��g��1B�~\+���&rq]�B��@�2r�����I�M��o|05	����B{\�ٽ-�=5S����Z"a���i��i�_�{	s�����-��bS�V��%�ƹq(ho��� �a�4mM����{*��{�0��L���^�v��U}ʲ%B��ȿ�3fý6 ��S���	]ֈc��� �{�?� ��9��и#*.̓�+6o�ڣB7��m��� Მ�ANQ��AkN�lW���g��Y�3|��gߎ��������T���ͦ<K�b�&w�أ����� ��ݔ��k�N��4A7%�x��7�0X0g0dW�1������y��+����[E��]�@@Fhfo��2碈V���r@��� T-c�-�_Bs���eUB�����]Ф9��Qr�v򭗥��l�ptz�}F�4��8��lg�;��)ԇ���u{�̂���u4y^rB�m��?@���t����xL���r���ģ���Ri)�@�T������:=�SR���L�P�k��Ѷfa+j�8ײ�:� <]qɶ���^�\т�"A0��C¶q�6���� I��A[�a��k��� P�;�%�"�`F�k*z�}*iH�`h�n���K�(\m�
[�jl�X�+[�$�l�/zlV�*�A��q���Nj�s�-WK�K��0�60�?���7���.6lV�m�p�ö.T��{iQ�LX ���4<�{��t:l���z�C�s�v監���ե֟�x�nk� �0��������V���1��W���y��R�vAhE�u��+nB�Ǔ�	&2Ͼx�<�@.@b�+��5b<(�����Q��t���V4�S�}R?���c�h���\r�� ���<����j��n�/1�v��
]�?=���mI��+���
�ĩp�R�a��sJ��7�CtWr����O�;�r����/�<�r���;(4{�"Xt��1A��@�>&X�E{O�O�����!H:d��0	�!A����	��n���ֳ_��� �4܌ZN.�C:h������a7�#���� ��7r���*{I���.�����s�V$�����)@W.�JSX��6{�Qr��O&�[�X�-;q=����½� S��-!i�l�L������+
{�T��mm��GH~�B��VC|NU�)�u�P47t�|�� r؂k���m�7K�nn�T�����3=B�E+Ԛ��]��=7|�C#����\��_r��`�ԗ�N1 #�b    ����RH)�6 9��}���Ր�Ɉ} ��U;n�)I!Jj̼�ĝg�Nsƃ�������2ME[���������ݏ�R�E+3гB�<Af�����
�E�Go���\f�%[/H-��Ci�?u�h�h�Х��|WXX��(��t�l��y6����Nw���MZ��W���G��%e�go���MK�p	5��y;D}��H�>�K��9��S#+u,u���\��s
۾��=��b��%����E31�E��sy��#���'�sY/I�@]�.P�ר�>���r0�	j�
�rQ�'f��cT�Xqs����#ŗSpz�wMI�N)�^��`9xa~��������W�r髐�|����ѣ���o���x�(��i��M!'�51�}��k�cyII�9�{�i�UJ3���kWf�.<m}����<v�C�E���Eš.	I@/�Qk9�1�����?����I���;�rl�7wM����0k�\�M /�Or9<�}��"�e�%���?�>�X��Νv�!(�V�NeеY�3�͏Q�yv���p��]��ۆ���[�ѰU�l�`���vohm�𫸅�yt�TR에H}|Fe�k*C��~�r]�s<
����\o9���_�b��y�h�h��.�6J�EX��s��=�[�+{]��ތ�U����GY���m��V�g�K�Ƨ��Z�m��Ĥ��~'�}5}g]!Cڅ,���hN&@�k�'���`�P�l��giEl���6� �;�u��`���#��4̓	�/���� ��E����}l�:R�W����S��H���ڭ���v�9Z��c�I+0}�. ��y��Ea']�e��;�B��3�R ��U̐%GJ��Q��bc�%:[7t���&I��x�1��}'���$򕋩�\Ŕ\���� CB �r�����	��e7J�䡎��(ݦ���C�f�[R�K��LE�v���>�S�3��B&��{yi��� 
�$�d�>$r&��J �2&����L�U�x�7���
p� ]��:Z�\���)��қt^8 ���3$�;�W,5F�P��x�WԴ$4�^v�4�w�2��+��g_܏s/��<� �"�s�u�9�Bf[�_rI��o�P4���@�@��un��TV!p�w���ύ�q6�YQ����.������.׭�/�|o��H����_��kZg����|W`�}�b��<��{Ӎ�/�N���A��*�L�ڧ߃�1���EJ�I�� �?@�9�9Ѵ�u��O�2�������͟�z*5��t�?�5��6{�7�T�B�a��/�	�#�W�͍��R��&�-f��351gY2���<s��A�T���	T;��^��?ةz�pO�j:xSٚDbq�b��Nz
�X�gB�u�a��rnII�J��Z�"��Pǎ�h���^x�[�\6Ǿ����c���.>(�4M=��P"�<��cBf<h&�,��OXGӡ����C�<������)ɕ�`�	T�ޔ܈�H+
l����H ��a%��o���D	e�W���MA2�s��S|l)����K@�����ZI9�]��1����3�j��m���N�6������.��þl[9�4V�>� w4ALm7}�]h��+�/6nx�+�N�lzv��V
ˍ�؅s�oB�׾�:%������B���!�P&:�76J^b�([�e���R�U���4��=x�<�ߝj�(�NeZp���񥾎Lޯ6NIAa¾�M'2��@�.��� M���%S��s���+��[m�,KF��<�ĆbÑ;/Ml �D��Pr% ��~���t�.�$g$��������AN,-�\�!�#��ھ��n9h/�=�"��/��RR��!AM�hB,{�x4��Ek����5��:V�d���!�FX�����k�57P�O����qIeD���Z��e1kn4���,�o�Q!�;�i�����4�xz�C�exL�<*���Jȥ��*�R���F� �E��$.U��X����J��$���#��aKm�5��$0?�q�,����_��EZ��,�ˏ�y�r5$F������mY%:�F\<R���D#�'�qhm�ߝI�`Kۨ����F�oHG��C��q�<eW��T3}A�&��C
G�0�x�W�q�U8��s��������9��ԁ�	��`�����p{�+��|k�;�f�e���d�,�+�-���x���Û0p
D��v�~_��-���T�w��#I�i�O��ݷ��!9���O�b@�:%���ٸ&�-��MO�N�����Bzε���ڀ��	nl�~MJ;N�R�*2�Sy��J3׮7.���*r̃��|CdA�~M'� /�X�NꀈC~/��-��`����2�X�C����ki�BIp]�=}��xxD�YD��2b�#[�E��/m�f�����ƾ�!�RQ0P<]�N�(Q�6�J���88;q�Q@b6�˼�<�A] "�Ҵ��-#T�|��ۻ´��(�t3�q�H�u��J+z��@�A�H�����5]A,��P�>@ר����muJ��D6$J?��e|}e^������ezT���`�T	��m�w�^b�fN�]	�'���d��������~�n�䆎�j"���
��K���7PL�t:,+9��i]�CD��y��H�T����F%Q<�k�B@<�|�-�آ5݉�6Uǭ�C�ҫJd�|s�@.B��׮�ț�<4��7��m�&�ې/�`��R3O�����;��<��M�^�ҶqG�Аa��0����3R�!1�į�ԡ��pz[����XǓSfQ|���E��j��Т���_�|�-��n\
7)j�/��X���HU֎�N��S$y�u�\Q=P�_�dE*VRυ�ؔ�- �0�4�u�ǰ�i&wbo�Ĺ��	G�[b������G�H>�� k��g�;Ėo�cW��&�������f1�L���n�C�2��-m�\#$`0�a_�����[$ۛ�C[�y������~�@��`�S <_N�+�	?C���=�]
5�uJϠ�����|^�!���A�mV�(�BUjI�U�p�'�&�'�S�*�m�"�(�}2��N/�.t2�C[ �B����9_���KJ����1!1��joS�6a[B�_b�d���$dM$=����7٫���w���+�����+��0�'��3�ԁ9\��:���'(�E�M�����TrOG,�.�nA�'兼S	S��6{�(�Ƃ��}R�RO����9xȳ�،
,$�{I�7���K-�?qgMi�_w*y�@ ��]��H�b8EEx��J���Ǟ|�@UW�H��4���!�5V�p2���C
�4h}X���˩Ȋ�oe���6�ۜ.h���He�57�m�,�����u�<\�����Eë��k�@�9�\���4��ǁ�Jd�s#'����i��=���F���nx(�9`\�}�3`��1u�R�Z��O�6yKy�`�X��z5bE?hMÇ���XE����c�/�<"�����El�G�:~(�g���#�Xg5�*�xg`U1�꾏i���� g�ݘڤ�)�� c��+}���M����Mצ�ӳ�Uo�P8w>!l@���gΔ���B�̰���!��9{tc]�r����~�eG�<O�(��y��Wp$S0�z�'Y�����d�Fx�=V��_�)�PT���Q��Q�0�P4hCl��M����O��r 	�I�¶�>�[��M�4D4��3��K[]B�zhmGN- xo>�x�E�ڶD7D�@H���y�E�j�:!Z��Ss�!/8��AP����}��	�^0�fcxA=��J��I��]#���*��o��P�x���h�_\�߈sƽI��b���](���@��%�,��c��uxv�}���m<�xͶ7������Iɔ�AQq]�Y���B�V�MhGm̶�����aR�-}� ����T�ۢ�O* �|{5tZSr��NN�\d��X��d9�xJ�hD����M    K�['���u��鈦���;s�'��BO�`\���	�ۮ�8�J�4?(��d�u_��E18��@���bK,���"f�~���myOw_�&�<1���<��
n��WOBN>�@�	)P �������L���X�"��CkW���
%e�܃	_�1����.�9)�a�����NV	��]�c���z�(E�ҝ�倗���E��{�j7<v��J��S[��HGL�����Y 9v�[18�"9���?����m�@*�ǃ�)�L[N�(&��v)O����&k��B�}D�>�b����0t�	�0���V�*V�������Q�^~b�E0�\*��Vؙ�4�Y�Ut�P �^�����P��;��n�f��,�SgJ�� O���B1Oc*c��"��>9~��Ф���h��v��B���2�?y�3�.	n��=��c����O8}��X�0� �(L`(	��6;���+t��_X�e���|���j;	Ņlz��䄂�-s��~��X�LR���g?���CCG��ܧ�C�7s�~���ĐI�+�5�vEhwO�1����B3=����G0��s4:�B�lL-%X���Sk�ô1Ԇ�]�/�>x�l�̒"L�2��7x}�wv�2�U�ԜkG�����CV^�dc�B��#���sk�R�Z���*����It�Ӕ5�mOu���p�h���Mc���}Z�)���'$Ï��L]J�Y�i�_	�<�Tr+�n��w����RϞj������J��ݷ"�:�v�����ն�6��OJ�iL�]B1��oZ���LO�虖M�Qs��  ��Db�)��^�{�G"�2{}���8/���	�B������u��q�<����^���O�^}Y�SH�H(��W|W0£�B
=�����6��,k��H0�+�:?���#�rC2�<�W+�nMS�n�빱�R�,9H�\.��p��1��+��M}{i�CI����:�@y0R�2M'Z��^Z��P�f�;N
�b��y���ޖ"�R��ܹf"�5
&����`��{�����)��~<q�*]�P�!!���ç����0�%�Dd���o:�8!^�q��,%H_�?�͓�27��J�֊}c`���< ϑF�;<H��O�؎S�Z�шo���=�d3{�4��7JX��h�H�y�/:�?��٬=����"������O8n4��O�4����>�д&VF�,��;{��ߧWݪ)��<B���Kh��)O:���8�8�
�٘4~E��=#���v�i#�S�!�II[,���x�0`�ms0;�� 0�n�\X/�ĦU��N�k��i�B�ib*]���M�Z��!�v6��F�p���荟�)Ķ�ʳ׮�`x^�2 ti�xy@ f<S�T^/�T�V)��
š�TC�"��1H�_;�Z1h�u\���k��؂��/VnF8�r���3�g�'��̞�5���ɹ�J�2�y����[���K�"���7�O����r4�ߵǶ�!s��Ũ�<��\㻀��-;���z��fɻ�h%9ywf�V��I�2���.7�
@y��
1����ގInqb��y�As��*�{�.�@o���J�Z[�b�s.��U�4�FRNI�ֻ�Х��0��ȡ����3�v��_��
�I� Qt���?�{s�\�Q��l�u�7��Z�}�m��+^�p��Uyzޔ�1Ҽ�GnvQrλ���`!�Z�S���Bn�>[V�rP�����xc[�s΋&���QF�o��m�:f�;��ra��3�v�'b�~E�� �V�9i���������	ST��\�rG�< t�����_&)z2�!�W��rf@�|?A#/c��z�x�#sh���X$��;���L�6��c�r����Oӡ֔����� G��띌ը�9w����f�����������O��-����	}|�;�δ��4S��� ��xC6�",�!��)��#�$)@Dw7:�p:!��xݐ"\���.=��zv7����$���7ۀ������Z�!ǒ�D/���eR�U�9ƀv��o�������Kz���e�U��L�P�g���l�o��jF0������I��0F��r��K(};��*|N` �ev{l�mLeV#��g����r����s���Mv�Q\��g�cJ0V��U��Q�Ŕ�gr�9�K� WB��bEr�SY��#���6_j1��B�`�� �y{��Y�tN3�?���^_�ӥ'�rY�>��\�f�\R#��4��S�r��9�~AdK��{�'�T[ۤ7�����!����MrR5�˜a�Z���-w`��[,n�N�� ���
�h�<o=�3��+nq5	�f��l#���V��J��x��>�h��D�>̮������5�T0-}��g�SAti�}��P���G�!��J���͖܉���VK���԰�BȔ�Trp�;��'[r�>ĞfH$ڵ�Ða�KD���cr%�e�H ��=%���2,���:�<*x�C2���s_��A{|�U����p��`bW��c�C��e�Y�Z4ׇ��s����s�L/��o�!u	o\��r�Ux�����A`����������j��]��L���2<{19-ӍJ�1��8��;�ǣ��^B���p�fx�����Mj�f@�Ä��X���oŅ5e`<Y�Uɨ�n���(빊�:OV���\��R�c����pK+ ¾�Y�������sn|Ćn�--W���m�(�^���`{��㽅�}�	. �쏃K���G5Z������[ߦI���kc����0T�ga�� C��R8?}޷�O?1nOJ��k�'�P����vDi��(�*�� ��|����-�E������)�2�d�ħN\�@׊��vC�<��aJ��kL4�<=�8]$u[���ER`Q�qI�{C/y��ΊP&	)��v�����ws�}T������s,@A�����S �$���ɗ&I� F/��s��g����˂n����O}ʼҟR�� -wB#u����bH�jH�`��]��i�;��;��p��⏉�N{�)���P�IU4A��G��VKP��(�
�Ojը�O2�r�1�J��Ћ���+�=��ν�H^����Ў���B���K��yTF���(��̌�[2��;����>_l�/K�.���Xh	0����1Q24����mH��r4��dȡ�]G#a�u����:4V���t��,�u=>��͏^��O�����2rUTB���÷��K½����k����P��x��sHp�:~^�ݷ�p\�X9�h�J���)���1Hc�ϟn?t�d�+��IGp���r��*�Mv��<���"7���%r+��C 7���1r]�Д�~M�e7����@�M����R���k�Ĥ���ق��6�;�yT�\�w���d�:��4���|U29�9o��! �F���JjS�7&*-A�h��7G���;�G�io�h4��2�\3�)bE�t=�Ri���4{(B3R}�e)U�e�:����Q1��0��5l.� P��������� O��@���l �K2w،����#��B�h��&"M\"8Kα�k$"��$3N���J,� �tS3�j ��c#-akt
M'���o���Ym͊��$�7tc<>�$��8wC+�ª��J!%��9��8�=�����y���P��� ���v�Wk�E����[..	�Q�^]�	�/�zc�ƪ=�zq1�Q�����"�O�[��ꆇ��ݣDC�"DKMu�X_w��Kx>൩����U�>ɾM�87Y����eX2��G+sN�>��V#���P� 	�
V����5�B�,?��lMR.���#��}��0,�B4�
T�b�ŧ^:)"sE j�'�b��JX*>BV�c��!b_���T^P0�U�/7��C!(���G7ʷ`� ��@T;d~[K#@3�}?�k���k�����	i�=�$�-�H�`T�f��I������>}�����8`��h����o���H��g�G��?D�/���    � �@G��ş�Wa�r�
��O_������PNn��36'D��G#ڔKȓm�ػ�c�`[��Y��w��S��NY��%>#SR�[�C�<����#�7S4�٭�zǐN�|�+2݉�Գi�*j��=E@����
"|{9��2Bkqe,�(q����|I�B�QEq�zD�a�n!K�ٵ[�3��K �Sa�VX������"�ī~{s.L]D�;x���-`��=`���f"���\S{�0�]9�꟡�-�z!�1ݕQ`�!�y�H?B�'���1���P�v�1�AH]>I��5M[e�1< ��Ԇ�^�0y�R���z�u���� �r�����} i�5}�����mJ��b4gW��6y.B�&pjg��猗^��P;# ٓٵ��r`�7`��e����׷��Y�a�SF^�՗w�gsKg�@R	
�3�"�6x���pr�h�An�@�}��p$7<����6�b��đ( c�+a0zQݔ���o��>Ѵ_�髀q~�>_���=u��K��[A Z��n���� ��u%�NM��<����Δ���Nv�������qTv�4u1J�Yu*Yb*�r'v!%Ey�~����/"�n�� +ʚ��&��ELN�r�kI����q'w���r�a��@S����1"-[`�^�����v��s�T�F�S���r
S9?��w4��x��3���Sj,��+��sH�j�L�*J�𸂉�<]�u��瞚��,B�k{�3���}��7%�t��.�($.�2-�􂤫���ٴ��������64+�m�Ć[{I���tJ!��/�p��z��!�Bܬ
�PKO��^��ჩ���\C�\�BxWD�-��І7^����`W�VH���;s�kn�0��[UJ��]_��֭��S%�P��MM.���kR�[��wMj,X���D�7��_�5�wA��\@�Hf
�'�ݞ
�T5M��o�]cRv� ۨڈ,THgZ�\�Hd�)�jʽ��s�Fl�րǡ��f&se�0r��������΍����=���F�O��?��,x�՘�aI�I��u@W��Y��:�\\0�5�䚗��g^�f���ĽK �S�L��1��;[�{
�\���)O�?�[�.=���%e[��K�G��mߘ�PT΍����v;j$�Znq�'x/�+1,ӛ-��z�^����mx+M@��cO��Yf/�-f�V�m�Lo��yCNHY�C�㛈R
��V;Fڊ];�v(�|� %|�r)�r&��!���OWv�Hrg�e$��-"C� ���ۉ�Ji���H1���
)�Y������5�7��(�`������Ůx�v�I`���*&��E��+ƥ��bۖ-'V�w���+^2�R'<G^�Ru���0*j#v�z��6�h���-/Ax9fѸ��ܿl\iϑ��O���.a��y���#�����&$G�(?���?��H���c��妯x|! X�l�&�ɗ�9p�ov��qYN!���^NI
��P.���5f(Z�]�A�Z�6
��W�Aq���	��HĽ�/	M�DtOZ���]%Fc$�|)�Ō�Wz�ݥ�AS��	wz��E���U\����н)ӊg���\CJ��I㵽��e��l!S�y|Ҙ-�fF�NOn%��Q7^�3 	��� �2����X��:5���*7(���_�'5C��.(��!�;s�-m�`n��y�c'gp=Z�L�`�4�]zC���E�A��:h��"��J�����0���ej6�����������F%?����h��n�-��c�(��Ĕ�a����;W6[F�+�V��ЄxL!����0��\�N[I	�� �f���ryAzHn)ۥW��D9~L�̩�r;kD$��as1t��t�G��Q�n�� ZZ+�,���	,��m�ʘ����7O
d(B��� D>@�᢫�:�ɃKA�<ǭˡ2�O�]L)���&W3��T]̾����R�W��7\�E�OJ���\ʽ�R���[�<DJ��Ŭ�$�h���Rp�j�$M��/$����7�7�z��3��J�;�P` ٪���R��~�� ���E�9�2�Ŋ	��m][pU��dM�|�l�g�|�ֈ��������A��qU�����`y����7S�\e�x/@��ye�H��0y)��B��0o(j�5Um*9��%#Ȝ�`N��_K�b�d�T�9�4��o�=�o�Ґ��<P��emmgRQ���]$74�1j@��8�S!��~�u�D��n#!W&E��������}��f��o���0��}�[T��n��G߈��]��>P<�6*��
�S��z�o3�+b[��@ާ��׍�b���z�J����&)��	��S=�QF��������B�F(4cX�S�h�֛SQB�����v}L����i�� �ˀ���1�a:�04	���붠�G�<����S6��}�F`�i��a���7���"���Q�NO���R�zZ��i"��l��!��^��<��BG^��#i�?"�R�I�G
��mC΁��	�F�x��G��z�m˅M�-�J��@K��X����N���w1��|99V��lRus^��Ĥ�r��.PƆ��u�u|3����E5Z���P�E.��Лv��J���rN|�����X4a�s�\2��t[E?H�倈#�9�X���wE/ז�'@���"��Ґҫ��+גo#)�9��2nA x��Ȗ�y�?�i7���yX	L�09����D��kɋR�K�#K^� �Q��Ƴ/<��:Bro�-}|kq�pC:<j�i�^6�˳O���h^�iw�W������Lj-X%Ou�%�_|B���[����	s��Q�X$9��ySe�i�ݙ�e� �x��`��J��ޤ���ؘ}C��"��~����J��?��0^A�p3��$m魡���:�>s�]���#A����rI��W%����Q�<!�Ob�Vx���cdi����FA$�޹o�̲O�I�a4~��u{}_%�4�Q� �D�nk�	]g���֩d���;,	꠴\d�;�_��T��C){Ϡ�)/#�uZ<�A��z�=�5��L�z��<�.�~�i��})G��4��!]/�@��H�J��G�s_ƈ���ٚ�ś�����W1Ɛ���J^?�bUୠZ�d�e��zR5,>��/ ����?��d�Q��	�bg���������GiL=���><���E�E�7��I�m����m�۲��\��au1k�a��z����$vsbܪ����M�ʶ�g�wꩧ�V�׻��,���ŵ������c�{����((�p?�X�L����o�n�]����2 y�q�/�t�2�$�&� |��>��
c؛�R��V��7�_(;N��=�[�a�Ȱ��yP�&r�P*�:%�؊�\rҶ� M_4&�d [s`g^���$_�������	��W#����q4��$�bȱ��L@�D��˂S�û�TƵ���nSr'd�%��cTJm k���WH����,ZV�}X�w�]ʩ~6}� ��֝ �!j�;3�����/xT��:9�b/�"�)��1��Jѳ���P���t����g^�T�]�r�Pi	&u�����͂��z�|�8��rL�
YS؈3��)��>Y���f�7�T.�3q'J5�����ff�����%遖+�dkJ�ĩ���Z춣�9�WCZZk+�z�}*���F Z+S�S�F����b��i?1�fzbA�w�����C}���9�K�졬�$��սn� �g��I��<�� n5N�)9�Oks˔"e���
��fY$��ƫ�c�i����'ԋZ���S�s���A����sld�T�R�VK�t!��i�P`.ƪH�FA���}7D_*���"�:��Q���jEh-��Jn�(�3�p-��
0�&dJ��Wh�S]�Ad��Q��7{}�qn4'�+Q`B�>/�.�˟"��9�.w�RF,���S֜
2�N*r��m�8d���Tc���jMJc�Dj    .�s���F3��w����xW9Gz
�
�@җ���|.�(�k�N�6��X�����V)
E��Za�����㉻�bYP� ����?)��t��$9|V��c�d�6��Y�FM'S�tI�ǣr2D���O�zRI� t[k�7\�m��q'љ�3�-O|�Ԗy����� D�x_�l�a�b� ʣ�.�D�H�����3�"���|�ƀb��Dw~;+3_h��Ĉ�
�	��j��,�!�"�x�7��|&�E
 W��\���ҏ�<'H�;�Ҡ�`,2�O҅��P�7��)Z���XA/�8Q(9��'�N%Eo=��OW�Ʌ�BW�>=>��!R�,`֎7CG���f�RP=��w��á�'��&棕	��c|pE��G3y�c	�x�!�&���j�.+����e�2����Fr%�x�H�Am-<
r����3�%U��� k|yr]Lc|Y�ܟR�sd�F�E��JO.y���to5��N��$J����F�ܣ��RŌ�{�T.���I�������0��](��`��4�+E�qzc��iy�钒x<�U�?��Ě�W�U(Pz��)���Lݵ��h��`�t'�rFJ�h���)^8[ω����)�=����:�,����8�r m�����LBFMn�2���1sr=�%��#�Pd�۞�>�0��a0"Xs0�-�y��<�٭lnh��8L���O�"���e0��'��eB ����,ܨ�+E��ь�)�3�]���6����5���m'�����<�&�P�/�ӥ|�	�;t�栎*tu.W�<�j�����u��������_������S��V'� L9:��WĖ�{^�h.��*rJ�~_�7�����K�M&�о3;�J��5���^݉�3�b
aU/	�L�41�~��?]Z`�c��"ʬ�y���5�V5uS����x�G���U�懆M|�x^r�L�=+)��8-����EZ.5>j���
,���w}9;���Oȩ�^ȵ�;/V0����q$"������XJ(!>U��2b�H�F̭>"[AlE{L+���tg�V��P�[�"X&�$�C�ٰPݣ�m�A4J��X镼r�[��wT��rw��U�6�(
m��"�<���0]u
s��,?�"�ȷ���$c�@x���J���"��*�%IŬ���$u�jr1��<�+l3$��䎆j���$4�t����4���?��(#�wC����y�K�F����������#�si{�=�\����int6���4�Ho��\��1���P��Lnpg�Ga��q��sa�9��sq��C�J/���͒��4��G��`�}2��7L��t�ΜS���`'oܱ�M�����t6�A�hCc\y�����VZ����������
�~��f���9FMk�lG�`��{�����˄q�*L���M����ޠ�+U�HΆ�K�	�cY��ݥ�7����x]'#"0�(>_zFx5���t�h$K� �B ڋF����m3 [�",��+=@��D �5�`���̇C�
p�����P��<��ѾIe��q-��JtA���eP�Q����}����Iw��"����R������/�l��]P��B>'�`� 9�4z��3b�>"<��ȹ�+���/f�3�j@���{̪f�2m������e���L�A����퐊u��uR�œ��H?
~x�0ƒ�����LF��Z��u��E%;���0���0Q�[S�ޢob*��g��UjC�w��r4s_���q�#V���\�ʭ��u�0˂���2�<[�Τ�GsI�R��ɡ�gq�N��W����<� ��ǔt��代Z���ih�����t���g�tU��5>���I��v:�3i�>�&4�A�����w�%�Ϩdʹa0T�3%}[���7^-)��հ���4�����S����&�<�^��=�:�O9dg�z�L�ſ])_��`M�z�G�b�槬=�*�\Bً���?�q�޶Ƨ	<w��>�b���k���tX�#@�`sbl9�i��7���O?3�ȸZ^ez� 7]��-Gyȸ�]?F���S��R�B|�q6�k����������uԋz,�+��\��Ju��s6㢶D�t#�	ea��zП^���k����6}{����A�㨠U��j��	��i��q��<�,�ˊA��kt��\/�4�5c�>�k?n ����&ִ���W!�A@n�ly���ɪHqãrmC��������?�
]3��Q_�|M,z�q	2�{�-�	Vz5!â�#=�I����N��5m�$���fr���T��\X;��ː&�V�,}}ғ`.���e���o�U4"��*�@#/�7#�Qs�����=���� ��]�ĞT�{PPh����B/�:$�7B��*
��n+��P�G��^�tⲞ2��P|Ք©� �^
�&OAx/��N�oH�Æ��T_�D�֔�F�Vn����ŐKb��.x�Q�I�H�̥�렱<6ɉ�iN͐i��f��\�S
�}r�O�E���sO�)��^�]��G�<C_	�?9�)Jy�V��)JU�b��:*Gr����T���w✭�ǭ9
���iMK����d�K�,�y��i��4c�����#t����+����R���-ol�⥨0D����c!�4�t�n�L�^G ��D7��R�YZ3-WFz����ut�q`ٯ}��30Xs,Fŭ1�k{�b�T(��
w2A��,�my�:h}#���o��Y�r��\�Ɠ����7U�e��L�
��O	og�KH���� i#�K�v�y�E���_]ײ�6c��Юf5��e��t�+��ҙΙm�-Yr$ю����TI���S��)��� ��0 �L�v�	eҢ
M^%��&���E����K�/�*n ��)���ҿ�r5d��;�)��6S RJ��4C*-��H�)�C�xi�m��3Pl>�ZX��iX��tE�&0(E�C�W����hʾ,p����p%`0UH�������3���<1S��U��)@.��
%��m?��Z����� �k������Ҵ~�+ ��h�K�mw� ��F."$���s��s�����zw�\@E3_u� �Fa�����
-& 2�Qe����������+&��ݳ�r⾤8u� Gp� #��i���9ȇ`;A���O���30e+�&'��O�?OV��n�]D�N���?w�݄vZ�K���t4�Zg��0GTͼ����+P
�C�g:�L_	|>� ��G+�4��a4Wџn�S�����Ͼ�t�`�?�� k�'�^��o�������e�U��������m�6�Ӻ�i3N�h��uuL������h0���{�賌�K�Y�AS����޹2��764c�EK�S�h��P�������e��U�8��I�\i��~AhNG����k�#G�����m�S�2}.�+�
V�KlmY�X���OR�#���=��(��L�0�jOt��_�Rn�������uR�)i��Gs<u���d^˽�2�&�8����!���g��	��xE��h�|dE�H��c��_Z=���_h�.��U�K�	��{�5�K�"����x��OV
wЊ���wP�S���PW4�2E�Q��1�L�S��AQd�=�B��A��q+���$��mb����u�n��	0e��#x�=��/�Z��`� -@CO�-6s@X��!JA5��[��E����{��teR6ތ&z�v4����D��~Q����e
�}�ѱ����c%]�X�L[�q���������AI�bd&��-�+�MIj�i����/�Q�a�{h�4�)I#���]��
Fq&�E��Qrfj+��$D�0�?7Y�L(c��յo/��F��$��hx��g�D���>�-��}��@	1������
�tx:�F�fLo���*�8	���y�d�����]�fÂ��}Kg��,x3�*>�@��Eﾆ�Bp�Oݏ���.    �������+���
IOe�r왺g���/��Va�r�I����
nFRѧacA�_cl6qA{0���H�qQ+0L�\�D�|sg��HY"��]�ғq=�d��
w��
ȡ�l�l��\4�;8��ө���W�o��j����0��Bq+�d��Q��+W}��{8���'=�S���� �bN|.�!�L� ��ʳg+���V6�
oT+?�b	$}�p��� j��!0~�/���R�<��8�����S+򂎈��ĳ]�M#0����U�O��*M��0Y40Aa�fG�W���_�2*��)�{�[]�ѿ�U��oOD�9F���/a`{���5��>��l���1j�'uX=��,�,��o]���w�a&����i6gm�J�O�}:�}]��-�Aਖ?@�q$��O� ��x���/�E� ��~2?�����C��3�E�O�!t("j�ց�5�����8!�a%d�Vr��D:�W�K���O�5��Y[��W�9�q���\��- ϊl�O���ma�v�u�YO#c���>Ԃ,�-�"��+Z��S��_~���r�mǗ�9-1�E�9����K�ϦGaN�������PF��|Z~�%�3���vA�Ȃ^�0+�d���派Ę�he�3Αu��9@F���f�;T�T�&�L[g�f��-h��~顢q�b���}�L��(�g��hD4O��3>W�o\���|h�4!��
5}QK�t�� �p���f@�D�7|@4�J���hA�����z��s�K����#�p�EH��b��0�wa�vb
W �&>v/��跖�_
�V����+@1�R�B�t��_��p����y�M�el{�V�k���B��k^�y������%6LW��kh<(B��ֽĜ��T���-uD��jR������ꃂ����1ՄT�£/�R�A1�a��~qH�����k���,B,m�D�MX��7&t>)�Z8W	� ߆cB=�[�tn����3hPNi-�������+\�`Zn&���x���ƝH!a��1o��5+60�T޼���*2�s���T�%�@Q#�+�@=H#���<Ϯ�w���p��;ܜkNZ �o�˪v<X�@`ӀV�5��⚯!v)�2#�xC|��<e	,��@R�F��,xc>1�� K�������Xq8�֜0�C>���5�S���������S��=�E-����3ٮm���>�|Q)2��N�C(_��]DZ��KL"��!�ɕ�sG�6�����Q����%?4<d�/�������_�!z2Nv�/�u>l�x��6��p[ɋ���'����r)���{����U@h:�u�b�@��X������ Ⅰ�]_�ot|���\ڄG�p#KK�`C}��1��Ɯ����2�8�xi����fW�l�'���De��1��;��+ߚ2 Ҩ�\^�F!�i Z��Pؤ
�"�6�`b�1P��kQ�4l.i�%WG'^͜�iĽ~Y�;�������D�W<�S�e� >i�O�Q���!�\PH=)���Ǵvi�2�z
Y�X�mҨ9S暥�yUh߂;�o{�%�'z�B{� @Un���B�yu �(���wv��8OON�� �Wkx��]� R '���V�8	��$�sU0�Ԡu�u�t�M:"��AP%�T��!�D��Mq�k��K��>��	�`��*�18���h=�b�&^$Y^�ܗ����p��A6l���yl�l7�?����`�U:��;'��=;삩}[�nwm��\����	Fox10�z��5� ����'�p <W� �B���峟O�>^�gD	yg��^֕�K=4����� C��@�@�flIά�
/��s��n#�,���}�+S�]��ƣ�����kd\i��wMk��Oڒ�bO]����ԣO�Z���wh�=0`#������`JG��_���<��Z᧵�LXS�/-b�U^^��٪8�N� �E��u'M�yM���	��2Ӂ���!ҽ��ǖ�0eX����M�^1o��%�O7�5~�z�n�#	��?Q�x� L�J��7�f��ҫ=��b�*m 0��\n�Wt�<��L+6KVi�u�݆gm���dv��fjLc 2T�:'@9O�G ��۬�2*d����29�N�7��{�CY5i![m��!��q��D�1d�S���z��ެ�(m6�4�%�"�������� ����\��Ph*$^��a�?�)�L1��eYN��Jzc`*�_���������M�(L����=�nh�jn��m}�UWeN�Ք#�ms��_T!+�s8�y�z�d�?��l�oA����vyV'�֓/�Ll��4��䆃*?{��qmgS���!>c|\� �E�^ΰ��	xnꃡ�n:�L#�|F�բ��T��S�������)�����Q�;���ef�j�Ƨб7	 ����r��#�#	�J�)8 ���#3Dn��ʴM�a��ؔ��+�����H}[�C(f�(	F%)��F]B���6�$꭭��43@�')l���@�R��̀M��諵�k�,�Z'��G��޽�g�5=�z�n*�S�j3ꋥ?s���>�^ڡ�A�������%*a��>�E���oN;t	S�l�^Ɓ<=C1�Cf��;���{�1z�(M:��4�w�2�A�U�b��^���=5*�'���ӡ@n�'e�����;^��"dJ_2/S�i�m�b�����P+����\~���3�m5]�m�`�]�&�3�,�YF��4�)���Gp�[�il7и�q� Y��d�#�	쒪���<�J�=|H����4-����/O����e�B�gj|mN�e�t��]C}6̻{�BF��-��ł\�Р q@FM@�Y�uE�Y+Ǚg����=?κPY���~�#������\h)�����E�`�+���'Պ�H2Ȼ^!�z��<�2��vPS��4eƔָ4[�!�4��C���]�O�
�
�p�6l�lN
��+�I��iL�̀�e��CZ�S7{��ø͂0�<^���zQ�שD��6킸dA6-�� ���k%���f�!�T�'�\~�TZv?��Usf���m�1�*`pl��D05���=��X����U}��0MᎾ◽��x�0��Xy�+Ckh�O�2�`�ௐ"S�(�<:bEf�t朹�۹�OW�˓D�! c������g*��_&`+�>��p��/>@���x�F@Z���
0��0)�O!b��9�x��u�~��ӄ.�v�N@!�\�ܧ�Y�%<���+h�P A��Pⱟ��x�i�����1�3�<�]
�v"O�|���#G�L^,���H��*�|`*���
2-�"�i�J�>�k��u@-�}�`n�ݻgp�3�T�Ѵ�8|;���3t�8Q]��L%���Z�	�N4V��� K0ϗ��Yi��7�h:����h,;<R���j �{����0�v'	FEx������C:���3���"�#sy�k6��pجW�:s�����
f�*���iy��ڃ��������k},��|�/���@����^��Zx�Cp����Qޥ���<���+>�j�c������e���ðOp8��Z*������C4��/�>d�р�9��a:�UX�*V���c���N��m���a���K�CJ�����7���n�*4��c�e ���4`�.�G�B��ǛBؐ�VΛ�l�C�Fē����I�����j_)@߫����e6y�虳gp��3g�� L��;�G$�
A�}1wA^������������l���w��D�9p+���p��.�ܚ�ζ0+μU�S��a�+vG�(����R�ġ�^�ۀѧ
�@������j}>���h#��]�-�<*�Xo��uQ���a��P�j��a��lX1* ̈�`G�2h�hC��� _  l`���AD��2�{�c�p�H[��U 6��j�r�4z^��$o�&?�-�&Hr�4��HS�*j,+���h�3ݯO�B���m��B������b��0ςu�M�A�B�"B�m��v��}��~3��1��c&�=� f�{�C%����}������n����ԭ��v0��f�Ҡ�f/�i[��`ȿ�8�{�c1�9�2(�e�Qw�m����6����L���A���D^��D��R���a��Eڞ0ъD�s�NDc7M�õz��ˈ� ���Qj� �Q���*�%��d�6On+C0&�,�L%з`�D7[�C�����
���ٲ�`Ĵm�/�e�Z-�J3l������mb��0�+'��PX�6��w�5v�"�譴�"�oh�L��)�b1�n;-�V�׉�� O'�s��i�o4A�~�A�zs�c���I��xhQ!�Y>+��=w
�5�
��'��p�g�	�A�� ػ]Z�4��;$�LP�k!�(0'�E ���������ka�:��L�����5�8pS?���zU��1K�ѹ>����'^b��&ն��'T-�V�i���Z<�򂝴[���]�vf�.Ve����d=Oާ��ҡv/�̷!�}�	%�̩��y���,*.��͠�eXAt�C�����{����i:��d��e9�J*��<a��5���އ,�G�S0q!��YE�oҀ7�v簮���?GL?�\sPa�r�����t.�M����b��	�/��y�A+`������v����6?�H���T��zo��[���� ��o�E�KS����H��"3�Z�4~飃M�l	l�M�^��V-0y�Țk1yC��޵(kkg�(w8Z	�(�{��*��X�B1o�i�2C8T���QH0��m��!���q�0f��	J�l= CZ禹��xl�Xi3{�_�v�6�v��ʴH�*���ΠUa�M� W�r�[Z�ع���䣧�Y�V��B�* ����MU�A�BvJ���=g-N�U�,��ҫ;��(�]x��e ���e�z�&�!DsD�W�y����C��%M�a?[�f�#��^�tT>�q�m�qw� m��i�
Z�&϶����ˣ����V�Nf7� �8W��e6`��f][��z����A[4����{���E�}ؚ���w�c�v|%�Z��?��T hQ^:����*�5�����;b�~���{��m��I
M���U@�(U��CW*�f�F�"�q��:�j��������.�-��ʁ�[�Ѷ\�VkE���&��bK`4�N�(�p�\J=t[�-
Ц�FY������*	8<f����^�a��LpV;�4X+:cƳk�"3B�W:$�0o���� :I�B��$v� 6j���lT/�G��Z-�,��z�*�Tڻs�����	w�'�	&�U�
�Ո6#A^"�ɖ�`�h�HL���΅�/�uf�q��W-4��Ƃ�e�᫠�WxqJ���x�D�T��E+�k8��wD������G:~_��ac=�V�7�G��i,���z�;��*�(l�j�+��� ����v���"ϣ3�,����6�ӧ_�&�u���(_�V�'.����^
����W@�2�d.Q�0�u]�m��j�+��Ҍ�}�R&�`0,�?�b��a�*FCbCSSv��Lwڥ+pҕI�+�3N
ؓ�{��-���Z��� �шw�v`T�vH6�~/`@y�r-v�̚�%����x�:�6P�&��-���s�^Y_"�JY�PFɷ�gX��Oy:�ױ$6��l���` m�:�����$��;��Զ?ϥX���*�k���|���~�����ϟ_���lܤm��S�F�����M��'�{ۧ`	��հthq�S:��b��>}��w���2U�=Y�O=���ix�pEn���se�1g<�=ɾà����:�T�:������x��Xfpp=�������
/����ɗ�d*�&�ցH뫩Q��`�b���tR-F��-���w�C<�4�l}�,"(%6Ԑ�s��C��|��m�kU�4=�t�k��d�6��mӓ�l	���Tf�ٲ!�|J ̟Ad(��M����UN���N�vQ'��	� =�՛#CxY�zk�(��hO�k�ε
r`ss5\_F���bZ�B�EC�ҕy`:	~/`ոkU��ɴ�p�C���j��L���V Z)��Kl���Ŝ׆����#��i�A�8��X��)�E�)t�[g�Y:�20��(�N�6-B�%���53�"�z�aKr������Y��g����q�ھҴ"?��z04������ٸ\M��p�fx����(�X�x!�@�jaZEtDu�5�����(bY-���dU�oDm��,30*��_c�MW�!4"Ē��^\N�4O	<�
ڂQMap�����6v���CpĻkR�J/�#�5s.��EH��4��<ԧ���	�\�>��%��~��C"�xl%��Ӭ4� �e�&��!@�A�x�qgq�S�FN��p�����(�����%s B�\0S������*zoj��8�o���y+Cژ��)���i��vH�!{�ЎI�#�d���f(Fk�G�!t�Sd�aZ�C2�$��#��."GooC��Q�ǣ +�	�e��9P�o���1�yF]�ط-f/;{�w��m��.cS��l�~�ʪ�O�޶7:,����J�|R*��	�"P���URp�u��+���K��P. xA�ȓ� c�@�UM.o���%,,��d��^�G@�":z���zD���Do�%HNx�G��*��4�Oʶ�l�=�ٰg�5��*ʍ��1#v�"�9n��řwP����mg@�	F�~�$��Ht���su�� WR�x�b���)��j���y��J�a�;��� O.���@z�Zb����%�C��a:܅�j6��P-��h��R(?��a�����N���+l(}��~�l�0� �k\���?�VrU������w�-���X#z�����o�DPVz��K��"'��+8���KKZ^-M���c��B`;PV��٦�a�#P�:*���S����yȄ����l���P�5��0k;�
� ��>f�*z��v����E�}Ei�e�~��B�Ҝ�;Eg��{$^@�M�RJX�W�d��o�Z�NG��<U�u[!�Z��+K;��3�J�N&�ƔH�+��b
a*�0�`���]�������m�bh��2�5�ւ�K���8��ب���2�֓;�'�8���[]/����,o`���;j��H9��T���l: �#�nU ~f�*��﮶!y��ib������A�l�R98����X���n*��9l�-��S�+��1�W`���>��CW�=@�����G��%E�O��v���^�x�)=cӶc�Aa̘5���.gK �ۜ�)�eZ���� ��{g�l�$ |��ay=��3��fp�#H��2pP0� Wӡ�+ 8>ռ,�<�qce�+G��2=�7����׬����(Eh$���l��t��<�� *oI��i�H���pp'�����~�ӡ�     