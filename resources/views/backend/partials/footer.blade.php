<footer id="footer">
    &copy; {{ \Carbon\Carbon::today()->format('Y') }} {{ config('blog.title') }}. Code released under the <a href="https://opensource.org/licenses/MIT" target="_blank">MIT License</a>

    <ul class="f-menu">
        <li><a href="/admin/profile">Profile</a></li>
        <li><a href="/admin/post">Posts</a></li>
        <li><a href="/admin/tag">Tags</a></li>
        <li><a href="/admin/upload">Uploads</a></li>
        <li><a href="https://github.com/TraianAlex/canvas">Support</a></li>
        <li><a href="mailto:victor_traian@yahoo.com">Contact</a></li>
    </ul>
</footer>
