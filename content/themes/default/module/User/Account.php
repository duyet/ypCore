{$Header}


<main class="content" role="main" >
  <article class="post" >
    <h1>{$text_account}</h1>
    <div class="row">
      <div class="span6">
          UserName: {$user.username} <br />
          Email: {$user.email} <br />
          Fullname: {$user.full_name}
      </div>
      <div class="span3">
        
      </div>
      <div class="span3">
        <ol>
         <li>{$link.account}</li>
         {if isset($link.admincp)}{$link.admincp}{/if}
         <li>{$link.changepass}</li>
         <li>{$link.changeemail}</li>
         <li>{$link.logout}</li>
    	</ol>
      </div>
    </div>
    </article>  
</main>

{$Footer}