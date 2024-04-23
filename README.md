# QUARANTINE CAMP DATABASE
Due to the Covid-19 outbreak, a quarantine camp has been set up to isolate and 
monitor people under investigation for 21 days. Those people admitted to the 
quarantine camp are called “patient”. The camp stores patient information including 
unique number, full name, identity number, phone, gender, and address. In addition, 
it wants to record the patient comorbidities (e.g., cancer, chronic lung diseases, 
diabetes, heart conditions, immunocompromised state) because they will put a 
4
patient in a high-risk situation. In parallel, a patient needs to be tracked with his or 
her symptoms such as fever, dry cough, tiredness, aches and pains, sore throat, 
diarrhoea, conjunctivitis, headache, loss of taste or smell, a rash on skin, or 
discolouration of fingers or toes. Some of them may be serious like difficulty 
breathing or shortness of breath, chest pain or pressure, and loss of speech or 
movement. Unlike comorbidity, a patient symptom is different from time to time.
The camp has different types of people: managers, doctors, nurses, staffs, and 
volunteers. One doctor will be designated as the head of the camp. Each has its own 
responsibility. Besides, the camp has several buildings, each has many floors and 
rooms. Each room has a limited capacity. There are three types of room: normal 
room, emergency room, and recuperation room. When admitted by a staff, a patient 
is assigned into a room based on his or her current condition. Sometimes, a patient 
is moved from his or her room to the emergency room or the recuperation room. So, 
it is important to track a patient location history. The camp needs to know the 
admission date, from where the patient is moved to the camp, the staff information,
and the testing information if any. A staff may admit many patients, and a patient is 
admitted by a staff.
The testing information includes those as described below: 
• PCR test: the result is true (positive) or false (negative). In case it is positive, 
the camp wants to track the corresponding cycle threshold (ct) value.
• Quick test: the result is true (positive) or false (negative). In case it is positive, 
the camp wants to track the corresponding cycle threshold (ct) value.
• SPO2: which is the percent saturation of oxygen in the blood. The test 
measures blood oxygen levels, indicated by percentage (%).
• Respiratory rate: it is measured by how many breaths per minute.
A patient may have many testing during his or her stay. If the SPO2 is smaller than 
96% and the respiratory rate is larger than 20 breaths per minute, the patient is 
marked “warning” and needs a healthcare action from the doctors. In case the patient 
has no clinical sign and the test is either negative or positive whose cycle threshold 
is larger than 30, he or she will be discharged from the camp. Neither of them, the 
patient will be tested for every 3 days by Quick test. It is important to track the 
discharge date for each patient.
5
A patient can receive treatment from at least one doctor. A doctor can treat many 
patients at the same time, or sometimes, he has no patients to treat. The camp needs 
the details of each treatment such as: treatment period (start date and end date), 
result, and medications. Each patient is taken care of by a nurse; a nurse can take 
care of many inpatients at the same time. The information of a medication is also 
stored in the database. This information consists of a unique code, name of the 
medication, effects, price, and expiration date.

## REQUIREMENTS
1. Design a fully labelled (E)ERD according to your business description. The 
diagram has to show appropriate entities (with key attributes underlined), 
relationships, cardinality ratios, and optional & mandatory membership 
classes (3 points).
2. Mapping your (E)ER diagram above to a relational database schema and 
identify all constraints not shown in your (E)ER diagram (1 point).
3. Build an application with the following requirements (6 points):
- Programming environment: optional (desktop, web, or mobile application).
- Programming language: optional. 
- Students need to prepare data and scripts for demonstration at the reporting session.
   ### Quarantine Camp Database
  1. Search patient information: Search results include the name, phone number 
  and information about his/her comorbidities (1 point).
  2. Add information for a new patient (1 point).
  3. List details of all testing which belong to a patient (1 point).
  4. Make a report that provides full information about the patient including 
  demographic information, comorbidities, symptoms, testing, and treatment (1 
  point).
  5. Proving one use-case of indexing efficiency in your scenarios (1 point)
  6. Solving one use-case of database security in your scenarios (1 point)
