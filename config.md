Configuration (config.json)
===========================

This project uses a top-level `config.json` file to control the PowerShell static-site script behavior. The file is intentionally git-ignored by default and lives at the repository root.

Example
-------

```json
{
  "LocalToScript": true,
  "OpenOutput": false,
  "Source": "../demo/index.php",
  "Destination": "output.html"
}
```

Fields
------

- `LocalToScript` (boolean): When `true`, paths in `Source` and `Destination` are treated as relative to the script location (`powershell\static.ps1`). When `false`, the provided paths are used as-is (absolute or relative to the current working directory).
- `OpenOutput` (boolean): When `true`, the script attempts to open the generated output (for example in the default browser) after processing.
- `Source` (string): Path to the input file or folder to process. Can be a relative path (subject to `LocalToScript`) or an absolute path.
- `Destination` (string): Path where the output will be written. Can be a filename (e.g. `output.html`) or a folder. If relative and `LocalToScript` is `true`, it will be resolved relative to the script.

Notes
-----

- The default `config.json` is in `.gitignore` to avoid committing environment-specific paths. Keep a project-specific example in `CONFIG.md` or `config.example.json` if you want to share defaults.
- On Windows, use backslashes or forward slashes; PowerShell will handle both. Example: `"Source": "..\\demo\\index.php"` or `"..\/demo\/index.php"`.
- If `Destination` is a file, the script will write that file. If it is a directory, the script may write multiple files depending on the script behavior.


Quick start
-----------

1. Create `config.json` in the repo root with values suited to your environment.
2. Run the PowerShell script:

```powershell
.
powershell\static.ps1
```

Or run it from PowerShell ISE / terminal after navigating to the repo root.
