{if $breadcrumb}
<ul class="breadcrumb">
  {foreach $breadcrumb.parent as $parent}
  <li><a href="{$parent.link}">{$parent.text}</a> <span class="divider">/</span></li>
  {/foreach}
  <li class="active">{$breadcrumb.curent}</li>
</ul>
{/if}