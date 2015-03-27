if [ "$#" -ne 1 ]; then
    echo "Usage: sync-assets.sh [YOUR SFTP USERNAME]"
    exit 1
fi
SFTP_HOST=replace
UPLOAD_PATH=/wp-content/uploads
lftp -c "user sftp://$1@$SFTP_HOST; mirror -n sftp://$1@$SFTP_HOST$UPLOAD_PATH /opt/uploads"
