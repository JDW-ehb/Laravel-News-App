@extends('layout.layout') {{-- Assuming you have a main layout file --}}

@section('title', 'About Us')

@section('content')
<div class="container">
    <h1>About Us</h1>
    <p>Welcome to our website. Here's a little bit about the sources we used. 
        <br>
        <br>
    Upon clicking the titles you'll be able to see the link sources + what i used from these sources. </p>

    <div class="card" onclick="toggleText('chatgpt')">
        <div class="card-header">
            ChatGPT
        </div>
        <div class="card-body d-none" id="chatgpt">
            <p>Helping understand how Laravel works & as guide for developing this project. I also used chatgpt for generating some dummy data present on the site.</p>
            link: <a href="https://chat.openai.com">https://chat.openai.com</a>
        </div>
    </div>

    <br>

    <div class="card" onclick="toggleText('codes-easy')">
        <div class="card-header">
            Tutorial from Codes Easy
        </div>
        <div class="card-body d-none" id="codes-easy">
            <p>For the login and register features, also understanding the core structure of Laravel.</p>
            <a href="https://www.youtube.com/embed/jmTJBGxn8vA">https://www.youtube.com/embed/jmTJBGxn8vA</a>
            <br>
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jmTJBGxn8vA" allowfullscreen></iframe>


        </div>
    </div>

    <br>

    <div class="card" onclick="toggleText('seeder-tutorial')">
        <div class="card-header">
            Seeder Tutorial
        </div>
        <div class="card-body d-none" id="seeder-tutorial">
            <p>To understand the seeders in Laravel.</p>
            <br>
            <a href="https://www.youtube.com/embed/HhosfXgTBYw">https://www.youtube.com/embed/HhosfXgTBYw</a>
            <br>
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HhosfXgTBYw" allowfullscreen></iframe>
        </div>
    </div>
    

    <br>

    <div class="card" onclick="toggleText('Bootstrap')">
        <div class="card-header">
            Bootstrap
        </div>
        <div class="card-body d-none" id="Bootstrap">
            <p>To help on the front-end level in the application i used bootstrap: </p> <a href="https://getbootstrap.com/">https://getbootstrap.com/</a>
        </div>
    </div>

    <br>

    <div class="card" onclick="toggleText('imagesused')">
        <div class="card-header">
            Images i used
        </div>
        <div class="card-body d-none" id="imagesused">
            <p>The images i used for dummy data are from here: </p>

            <a href="https://www.bing.com/images/search?view=detailV2&ccid=kyVoTEY1&id=65C30A3AC349ED0BAEC72DE636E25366E4171F8F&thid=OIP.kyVoTEY18ls3Lrd0FI3iZAHaEK&mediaurl=https%3A%2F%2Fstore-images.s-microsoft.com%2Fimage%2Fapps.36829.65722037288233550.181ab2be-6a0e-4ade-977f-9014db10984e.0ae51c5e-590c-4804-afdb-d21cda63da54%3Fmode%3Dscale%26q%3D90%26h%3D1080%26w%3D1920&cdnurl=https%3A%2F%2Fth.bing.com%2Fth%2Fid%2FR.9325684c4635f25b372eb774148de264%3Frik%3Djx8X5GZT4jbmLQ%26pid%3DImgRaw%26r%3D0&exph=1080&expw=1920&q=halo+combat+evolved&simid=608036940186723929&form=IRPRST&ck=0EE6861AB18629969DCAE72B2DE8C1F9&selectedindex=5&itb=0&ajaxhist=0&ajaxserp=0&vt=0&sim=11">Halo</a>
            <a href="https://www.bing.com/images/search?view=detailV2&ccid=9B0XQHxC&id=2BAC5C85733380117D159174681F445629ECB9F6&thid=OIP.9B0XQHxCe9k7mJhI5hZwVwHaHa&mediaurl=https%3a%2f%2f3.bp.blogspot.com%2f-qn916QiwfFo%2fXR40yv-QXoI%2fAAAAAAAAIGc%2ftXmSlUxtyzUqItbJFa0JqTQT3hblFTuEgCKgBGAs%2fw1920-h1920-p-k-no-nu%2felden-ring-logo-uhdpaper.com-4K-2.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.f41d17407c427bd93b989848e6167057%3frik%3d9rnsKVZEH2h0kQ%26pid%3dImgRaw%26r%3d0&exph=1920&expw=1920&q=elden+ring&simid=608045762038691582&FORM=IRPRST&ck=696637681F0105277F02783E5E87F2FB&selectedIndex=24&itb=0&ajaxhist=0&ajaxserp=0">Elden Ring</a>
            <a href="https://www.bing.com/images/search?view=detailV2&ccid=QN0f%2BN1X&id=6A47971B036C1D13380276A80F7F1BA19045A632&thid=OIP.QN0f-N1XSqrrPl6eq_-rnAHaEK&mediaurl=https%3A%2F%2Fimages.hdqwalls.com%2Fwallpapers%2Fdark-souls-3-8k-om.jpg&cdnurl=https%3A%2F%2Fth.bing.com%2Fth%2Fid%2FR.40dd1ff8dd574aaaeb3e5e9eabffab9c%3Frik%3DMqZFkKEbfw%252bodg%26pid%3DImgRaw%26r%3D0&exph=4320&expw=7680&q=dark+souls+3&simid=607999685623578028&form=IRPRST&ck=EBC76CE1C2FB901BD8E6F64A81872965&selectedindex=1&itb=0&ajaxhist=0&ajaxserp=0&vt=0&sim=11">dark souls 3</a>
            <a href="https://www.bing.com/images/search?view=detailV2&ccid=kh6KTh1F&id=2141CC15ACF19AE5EA1F33CDF1A521ACED650B0D&thid=OIP.kh6KTh1FsinaodONqM17awHaEK&mediaurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.921e8a4e1d45b229daa1d38da8cd7b6b%3frik%3dDQtl7awhpfHNMw%26riu%3dhttp%253a%252f%252fwww.ranklogos.com%252fwp-content%252fuploads%252f2015%252f06%252fBaldurs-Gate-II-Shadows-of-Amn-Logo.jpg%26ehk%3dlnU8mm%252bQaGXt0Dgk%252fg%252bSsCfNNNSpPMIoKX2LDbwCgo0%253d%26risl%3d%26pid%3dImgRaw%26r%3d0&exph=1080&expw=1920&q=baldur%27s+gate+2+game+icone&simid=608055880983800230&FORM=IRPRST&ck=A1F9F39C8A71DC8A32ACE16B30C0284C&selectedIndex=5&itb=0&ajaxhist=0&ajaxserp=0">Baldur's gate 2</a>
            <a href="https://www.bing.com/images/search?view=detailV2&ccid=F%2FwaLzn8&id=560DF7736537F42158FFD45F2B53D3D37794C4C7&thid=OIP.F_waLzn8zQFC6EhYEtxfuAHaEK&mediaurl=https%3A%2F%2Fth.bing.com%2Fth%2Fid%2FR.17fc1a2f39fccd0142e8485812dc5fb8%3Frik%3Dx8SUd9PTUytf1A%26riu%3Dhttp%253a%252f%252f1.bp.blogspot.com%252f-TtDG9TUcfgg%252fUqbpj-ht-6I%252fAAAAAAAAl18%252fpsLT9ldg4Ps%252fs1600%252fFallout_New_Vegas_(PC)_01.jpg%26ehk%3D%252bgl0VIYCYPwO1%252fZzHq5UaxQhxpYcmc1HEz%252bxMcESXBw%253d%26risl%3D%26pid%3DImgRaw%26r%3D0&exph=720&expw=1280&q=fallout+new+vegas&simid=608035131952400689&form=IRPRST&ck=BCCB1EBCD3506835FD03F4AC0A46D27D&selectedindex=1&itb=0&ajaxhist=0&ajaxserp=0&vt=0&sim=11">Fallout new vegas</a>
            <a href="https://www.bing.com/images/search?view=detailV2&ccid=mTs8C3%2fV&id=58C775B5EC1591C0C8FC129C90DEFC115112F6A4&thid=OIP.mTs8C3_VSy88ztLDXVrR8gHaEo&mediaurl=https%3a%2f%2fwww.dualshockers.com%2fwp-content%2fuploads%2f2017%2f01%2fthe_elder_scrolls_v_skyrim.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.993b3c0b7fd54b2f3cced2c35d5ad1f2%3frik%3dpPYSURH83pCcEg%26pid%3dImgRaw%26r%3d0&exph=1200&expw=1920&q=SKYRIM&simid=607988334064775119&form=IRPRST&ck=B922A8601756068844070F42BBBB1BCD&selectedindex=0&itb=0&ajaxhist=0&ajaxserp=0&first=1">Skyrim</a>
            <a href="https://www.bing.com/images/search?view=detailV2&ccid=lo5UZPhr&id=04B6F7094273C728DE4BD80429BA955C277E7DEA&thid=OIP.lo5UZPhr7ESrDdhS5pEYIwHaGa&mediaurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.968e5464f86bec44ab0dd852e6911823%3frik%3d6n1%252bJ1yVuikE2A%26riu%3dhttp%253a%252f%252fd.ibtimes.co.uk%252fen%252ffull%252f1412557%252fassassins-creed-unity.jpg%26ehk%3d4DvDk9D41fZhIT4nRu72CYAgAVsuokhSrp5IjVV81ik%253d%26risl%3d%26pid%3dImgRaw%26r%3d0&exph=1319&expw=1524&q=assassins+creed+unity&simid=608026129731442983&FORM=IRPRST&ck=BC484E0D8FAD8F7FAC4811B09179E4BB&selectedIndex=4&itb=0&ajaxhist=0&ajaxserp=0">Assassin's Creed Unity</a>
            <a href="https://www.bing.com/images/search?view=detailV2&ccid=f1LSypB7&id=70CC0889961C8AAF80442E3BEC093BED748816B2&thid=OIP.f1LSypB7jKJUeXyRz9rrPwHaFj&mediaurl=https%3a%2f%2fwww.justpushstart.com%2fwp-content%2fuploads%2f2012%2f09%2fmass-effect.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.7f52d2ca907b8ca254797c91cfdaeb3f%3frik%3dshaIdO07Cew7Lg%26pid%3dImgRaw%26r%3d0&exph=1200&expw=1600&q=mass+effect+1&simid=608042218700424630&FORM=IRPRST&ck=D9323FA254B7F00D8C92CBAD138AD3A9&selectedIndex=0&itb=0&ajaxhist=0&ajaxserp=0">Mass Effect</a>
            <a href="https://www.bing.com/images/search?view=detailV2&ccid=wswNRoQa&id=BA1E3AA2422D4CA24429D142365634058A073D11&thid=OIP.wswNRoQaavw4CgNNDSQT8gHaEo&mediaurl=https%3a%2f%2fwww.dsogaming.com%2fwp-content%2fuploads%2f2020%2f05%2fThe-Witcher-3-E3-wallpaper.jpeg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.c2cc0d46841a6afc380a034d0d2413f2%3frik%3dET0HigU0VjZC0Q%26pid%3dImgRaw%26r%3d0&exph=1200&expw=1920&q=the+witcher+3&simid=608016977168906804&FORM=IRPRST&ck=83C3A102F72B7B5AE8087348DBB019F1&selectedIndex=1&itb=0&ajaxhist=0&ajaxserp=0">The Witcher 3</a>
            <a href="https://www.bing.com/images/search?view=detailV2&ccid=EsdVgqoZ&id=75B09631B0AD0C66818B95257B01673CDDA85DF4&thid=OIP.EsdVgqoZrtPXfPUkUI5rQQHaHa&mediaurl=https%3a%2f%2fblog.us.playstation.com%2ftachyon%2f2019%2f03%2fDays-Gone.jpg%3ffit%3d1024%2c1024&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.12c75582aa19aed3d77cf524508e6b41%3frik%3d9F2o3TxnAXsllQ%26pid%3dImgRaw%26r%3d0&exph=1024&expw=1024&q=days+gone&simid=607996064951391744&FORM=IRPRST&ck=3593081E6D46C0D01B68F9DC052D3EC3&selectedIndex=0&itb=0&ajaxhist=0&ajaxserp=0">Days Gone</a>
            <a href="https://www.bing.com/images/search?view=detailV2&ccid=i9n79q1s&id=D201B656A67C45B549D5108F37A4680F4BEA600E&thid=OIP.i9n79q1sI-UcBOrfKnQegwHaEK&mediaurl=https%3a%2f%2fwholesgame.com%2fwp-content%2fuploads%2fMinecraft-wallpaper.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.8bd9fbf6ad6c23e51c04eadf2a741e83%3frik%3dDmDqSw9opDePEA%26pid%3dImgRaw%26r%3d0&exph=756&expw=1344&q=minecraft&simid=608051238130566763&FORM=IRPRST&ck=1CB633F98CBD27A522C9541E058C10E9&selectedIndex=3&itb=0&ajaxhist=0&ajaxserp=0">Minecraft</a>
            <a href="https://www.bing.com/images/search?view=detailV2&ccid=kyslstnS&id=A63A04E5190A7C9C64DA7589C5616DF5DFC6C30B&thid=OIP.kyslstnS7mcoRbOmBjhJmQHaII&mediaurl=https%3a%2f%2fwww.gameconnect.net%2fwp-content%2fuploads%2f2013%2f03%2fbattlefield_4_-_key_art.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.932b25b2d9d2ee672845b3a606384999%3frik%3dC8PG3%252fVtYcWJdQ%26pid%3dImgRaw%26r%3d0&exph=1030&expw=938&q=battlefield+4&simid=608032065363126984&FORM=IRPRST&ck=1E9FD6550EB76C9170F7C3635BB8DC5B&selectedIndex=13&itb=0&ajaxhist=0&ajaxserp=0">Battlefield 4</a>
            <a href="https://www.bing.com/images/search?view=detailV2&ccid=C9a6fKvv&id=B021F25755A1FD9BE306523026A284F9A8147ECA&thid=OIP.C9a6fKvvlEWXuA4EqKX6jwHaEo&mediaurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.0bd6ba7cabef944597b80e04a8a5fa8f%3frik%3dyn4UqPmEoiYwUg%26riu%3dhttp%253a%252f%252fwww.hdwallpapers.in%252fdownload%252fthe_evil_within_2014_game-2560x1600.jpg%26ehk%3do1z6xS%252fTSUAC69et4mVFUxVClJvkfKTwOxIjkQn4puE%253d%26risl%3d%26pid%3dImgRaw%26r%3d0&exph=1600&expw=2560&q=the+evil+within&simid=608002584717446110&FORM=IRPRST&ck=1DF2E84D7951F4D8294B8178D1783552&selectedIndex=0&itb=0&ajaxhist=0&ajaxserp=0">The Evil Within</a>
            <a href="https://www.bing.com/images/search?view=detailV2&ccid=f9sHvEZx&id=651699D7D55C1FAA26D3AED893C910EB2EDE5DEF&thid=OIP.f9sHvEZxoru_vI3eXkBYmwHaEK&mediaurl=https%3a%2f%2fimages.hdqwalls.com%2fwallpapers%2fcyberpunk-2077-2020-4k-game-0c.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.7fdb07bc4671a2bbbfbc8dde5e40589b%3frik%3d713eLusQyZPYrg%26pid%3dImgRaw%26r%3d0&exph=2160&expw=3840&q=cyberpunk+2077&simid=608006939825078714&FORM=IRPRST&ck=73311D7B0765FA7D4D6759F9BBFFFB8E&selectedIndex=3&itb=0&ajaxhist=0&ajaxserp=0">cyberpunk</a>
            <a href="https://www.bing.com/images/search?view=detailV2&ccid=zkGgtNv9&id=311A2E66A986F89D78F44BE0C8ABE636C4FC7A2D&thid=OIP.zkGgtNv9OOnRuWWI8XgI4AHaEK&mediaurl=https%3a%2f%2fwallsdesk.com%2fwp-content%2fuploads%2f2016%2f08%2fCounter-Strike-Global-Offensive-Computer-Backgrounds.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.ce41a0b4dbfd38e9d1b96588f17808e0%3frik%3dLXr8xDbmq8jgSw%26pid%3dImgRaw%26r%3d0&exph=1440&expw=2560&q=counter-strike&simid=608042493569736890&FORM=IRPRST&ck=D936F765186184E082E4912F805D2D3F&selectedIndex=4&itb=0&ajaxhist=0&ajaxserp=0">CSGO</a>
            <a href="https://www.bing.com/images/search?view=detailV2&ccid=WOPyTWkk&id=1C6A66A70EF7A8C4738230EE22803C8A1FC661AA&thid=OIP.WOPyTWkkh-_n4gxfGFhAOgHaHa&mediaurl=https%3a%2f%2fassets1.ignimgs.com%2f2019%2f01%2f17%2fterraria---button-1547745886957.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.58e3f24d692487efe7e20c5f1858403a%3frik%3dqmHGH4o8gCLuMA%26pid%3dImgRaw%26r%3d0&exph=1080&expw=1080&q=terraria&simid=608024974397229128&FORM=IRPRST&ck=EC3766337A2C1818F6E910E5E7B4D9D4&selectedIndex=3&itb=0&ajaxhist=0&ajaxserp=0">Terraria</a>
            <a href="https://www.bing.com/images/search?view=detailV2&ccid=Js0ePbuO&id=1A0480ED252E7B0969C169BA8206A5D4B690F791&thid=OIP.Js0ePbuO1pNE6voZz-rDxAHaEK&mediaurl=https%3a%2f%2fwww.mkaugaming.com%2fwp-content%2fuploads%2f2020%2f01%2f2020-01-13_00010.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.26cd1e3dbb8ed69344eafa19cfeac3c4%3frik%3dkfeQttSlBoK6aQ%26pid%3dImgRaw%26r%3d0&exph=1080&expw=1920&q=battlefront+2&simid=607990906746831412&FORM=IRPRST&ck=204804613F05EB25F73392670E4D2F27&selectedIndex=4&itb=0&ajaxhist=0&ajaxserp=0">Battlefront 2</a>
            <a href="https://www.bing.com/images/search?view=detailV2&ccid=6msgD1T4&id=4A2BB9A115F64AF4D037034DECC2EED380B33B39&thid=OIP.6msgD1T4ikG8vDn26lCipwHaFj&mediaurl=https%3a%2f%2fwww.wired.com%2fgeekdad%2fwp-content%2fuploads%2f2010%2f07%2flego-harry-potter-the-video-game1.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.ea6b200f54f88a41bcbc39f6ea50a2a7%3frik%3dOTuzgNPuwuxNAw%26pid%3dImgRaw%26r%3d0&exph=768&expw=1024&q=lego+harry+potter+game&simid=608053703440991723&FORM=IRPRST&ck=F3D97B2689C87C834259179493E93103&selectedIndex=1&itb=0&ajaxhist=0&ajaxserp=0">Harry Potter Lego</a>


        </div>
    </div>

    <br>

    <div class="card" onclick="toggleText('laravel')">
        <div class="card-header">
            Laravel documentation
        </div>
        <div class="card-body d-none" id="laravel">
            <p>The documentation of laravel helped me start and understand how laravel works: </p> <a href="https://laravel.com/docs/10.x/installation">https://laravel.com/docs/10.x/installation</a>
    </div>
    </div>

    
</div>



<script>
    function toggleText(id) {
        var element = document.getElementById(id);
        element.classList.toggle('d-none');
    }
</script>
@endsection