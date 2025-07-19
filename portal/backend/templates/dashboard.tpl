<h1>Dashboard</h1>
{if $dashboard_do eq 'show_home'}
    {call dashboard}
{else}
    {call $dashboard_do}
{/if}

{function name=dashboard}
    <p>Graphs comes here!</p>
{/function}
