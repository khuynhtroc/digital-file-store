# Google Drive setup (service account)

1. Go to Google Cloud Console → Create a Project.
2. Enable Google Drive API for the project.
3. Create a Service Account (IAM) and generate a JSON key — download it.
4. Share the Drive folder or files with the service account email (the JSON contains an email like x@project.iam.gserviceaccount.com).
5. Store the JSON content in backend as a secure env var path (backend/.env GOOGLE_DRIVE_SERVICE_ACCOUNT_JSON=/path/to/json).
6. Use Google API libraries (google/apiclient) in Laravel to generate download links or to stream files.

Security note: If you store plain "share links" (anyone with link), they are easy to copy — consider using signed URLs or server-side streaming for better control.
