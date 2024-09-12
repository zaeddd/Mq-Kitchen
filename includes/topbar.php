<style>
    .header {
            background-color: white;
            padding: 0px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
    }

    .header img {
            width: 80px;
    }

    .topbar{
        background-color:black;
        height:25px;
        width: 100vw;
    }

    .nav-links {
            display: flex;
            gap: 20px;
    }

    .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: bold;
    }

    .nav-links a:hover {
            text-decoration: underline;
    }

    .search-bar {
            padding: 5px;
            width: 200px;
            border-radius: 5px;
            border: 1px solid #ccc;
    }

    .hr{
        border: 1px solid red;
    }
</style>
<div class="topbar"></div>
<div class="header">
    <img src="bgMQ.png" alt="MO Kitchen Logo">
    
        <div class="nav-links">
        </div>
    <input type="text" class="search-bar" placeholder="What are you looking for?">   
</div>
<hr> 