from flask import Flask, render_template, request

app = Flask(__name__)
@app.route('/upload', methods=['POST'])
def upload_file():
    if 'file' not in request.files:
        return 'No file part'

    file = request.files['file']

    if file.filename == '':
        return 'No selected file'

    if file:
        file.save('upload/' + file.filename)  # Save the file to the uploads folder
        return 'File uploaded successfully'
if __name__ == "__main__":
    app.run(debug=True)
