$config = Get-Content -Path "$PWD\config.json" | ConvertFrom-Json
if ($config.LocalToScript -eq $true) {
    $sourcePath = Join-Path -Path $PSScriptRoot -ChildPath $config.Source
    $destinationPath = Join-Path -Path $PSScriptRoot -ChildPath $config.Destination
} else {
    $sourcePath = $config.Source
    $destinationPath = $config.Destination
}
php $sourcePath > $destinationPath
Write-Host "Generated static file at: $destinationPath"
if ($config.OpenOutput -eq $true) {
    Start-Process -FilePath $destinationPath
}