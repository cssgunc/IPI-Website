from flask import Flask, render_template, request, url_for, abort, redirect
from flask_sqlalchemy import SQLAlchemy

app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///D:\\Github\\IPI-Website\\IPI-petition\\test.db'
db = SQLAlchemy(app)

class Person(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    name = db.Column(db.String, unique=True, nullable=False)
    email = db.Column(db.String, unique=True, nullable=False)
    year = db.Column(db.Integer, unique=False, nullable=False)
    comment = db.Column(db.String, unique = False, nullable=True)

    def __repr__(self):
        self.name = self.name.replace("'", "")
        return '<User %r, %s>' % (self.name, self.email)

petitionGroup = []

@app.route("/")
def index():
    petitionGroup = Person.query.all()
    return render_template("index.html", petition=petitionGroup)

@app.route("/add", methods=['GET', 'POST'])
def add():
    name_input = request.form['name']
    email_input = request.form['email']
    year_input = request.form['year']
    comment_input = request.form['comment']
    if name_input == "" or email_input == "" or year_input == "":
        abort(401)

    person = Person(name=name_input, email=email_input, year=year_input, comment=comment_input)
    db.session.add(person)
    db.session.commit()
    return redirect(url_for('index'))

    
    
