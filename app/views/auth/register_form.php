<form method="POST" action="/register">
    <input type="text" name="full_name" placeholder="Full Name" required />
    <input type="email" name="email" placeholder="Email" required />
    <input type="password" name="password" placeholder="Password" required />
    <select name="role">
        <option value="STUDENT">Student</option>
        <option value="TEACHER">Teacher</option>
        <option value="GUARDIAN">Guardian</option>
        <option value="ADMIN">Admin</option>
    </select>
    <button type="submit">Register</button>
</form>